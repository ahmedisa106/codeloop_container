<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['create']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('employees.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 form-group">
                    <label class="form-label">الإسم</label>
                    <input class="form-control" name="name" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">إسم المستخدم</label>
                    <input class="form-control" name="username" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">الرمز</label>
                    <input class="form-control" name="code" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">البريد الإلكرتوني</label>
                    <input class="form-control" name="email" type="email" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">كلمه المرور</label>
                    <input class="form-control" name="password" type="password">
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label">الجنسيه</label>
                    <input class="form-control" name="nationality" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">الهاتف</label>
                    <input class="form-control" name="phone" type="number" placeholder="">
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label">الفرع</label>
                    <select name="branch_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر فرع</option>
                        @foreach($branches as $branch)
                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label">نوع الوظيفه</label>
                    <select name="job_type" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر الوظيفه</option>

                        <option value="driver">سائق</option>
                        <option value="messenger">مندوب</option>

                    </select>
                </div>

                <div class="col-md-6 form-group messenger_job d-none">
                    <label class="form-label">التصنيف</label>
                    <select name="category_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>نوع وظيقه المندوب</option>
                        @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
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
                                <input class="" name="status" value="active" type="checkbox">
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
