<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['edit']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('employees.update',$employee->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf

                <input type="hidden" name="id" value="{{$employee->id}}">
                <div class="col-md-6 form-group">
                    <label class="form-label">الإسم</label>
                    <input class="form-control" name="name" value="{{$employee->name}}" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">إسم المستخدم</label>
                    <input class="form-control" name="username" value="{{$employee->username}}" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">الرمز</label>
                    <input class="form-control" name="code" value="{{$employee->code}}" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">البريد الإلكرتوني</label>
                    <input class="form-control" name="email" value="{{$employee->email}}" type="email" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">كلمه المرور</label>
                    <input class="form-control" name="password" type="password">
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label">الجنسيه</label>
                    <input class="form-control" name="nationality" value="{{$employee->nationality}}" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">الهاتف</label>
                    <input class="form-control" name="phone" value="{{$employee->phone}}" type="number" placeholder="">
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label">الفرع</label>
                    <select name="branch_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر فرع</option>
                        @foreach($branches as $branch)
                            <option {{$employee->branch_id == $branch->id ? 'selected':''}}  value="{{$branch->id}}">{{$branch->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label">نوع الوظيفه</label>
                    <select name="job_type" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر الوظيفه</option>
                        <option {{$employee->job_type == 'driver' ? 'selected':''}} value="driver">سائق</option>
                        <option {{$employee->job_type == 'messenger' ? 'selected':''}} value="messenger">مندوب</option>

                    </select>
                </div>

                <div class="col-md-6 form-group messenger_job {{$employee->job_type=='messenger' ? '':'d-none'}} ">
                    <label class="form-label">نوع وظيقه المندوب</label>
                    <select name="messenger_type" class="form-control select2-custom" id="">
                        <option value="" disabled selected>نوع وظيقه المندوب</option>
                        <option {{$employee->messenger_type == 'trash' ? 'selected':''}} value="trash">نفايات</option>
                        <option {{$employee->messenger_type == 'rubble' ? 'selected':''}} value="rubble">أنقاض</option>

                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label">الشعار</label>
                    <input class="form-control photo" name="photo" id="photo" type="file">
                </div>
                <div class="col-md-6 form-group">
                    <img id="pic-prev" src="{{asset('assets/dashboard')}}/images/picture.svg" class="out-img pic-prev"/>
                </div>
                <div class="switch-showcase">
                    <div class="media">
                        <label class="col-form-label">نشط</label>
                        <div class="icon-state">
                            <label class="switch">
                                <input {{$employee->status == 'active'? 'checked':''}} class="" name="status" value="active" type="checkbox">
                                <span class="switch-state"></span>
                            </label>
                        </div>
                        <label class="col-form-label">غير نشط</label>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary btn-air-primary btn-icon" type="submit">
                        <i class="fa fa-save"></i>
                        حفظ
                    </button>
                    <button class="btn btn-danger exsit_modal btn-air-danger btn-icon"
                            type="button" data-bs-dismiss="modal">
                        <i class="fa fa-times"></i>
                        خروج
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>


<script>
    $('select[name="job_type"]').on('change', function () {
        if ($(this).val() == 'messenger') {
            $('.messenger_job').removeClass('d-none');
        } else {
            $('.messenger_job').addClass('d-none');
        }

    })
</script>
