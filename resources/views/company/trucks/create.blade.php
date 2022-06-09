<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['create']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('trucks.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 form-group">
                    <label class="form-label">رقم الشاحنه</label>
                    <input class="form-control" name="number" type="number" placeholder="">
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label">السائق</label>
                    <select name="driver_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر سائق</option>
                        @foreach($drivers as $driver)
                            <option value="{{$driver->id}}">{{$driver->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="col-md-12 form-group">
                    <label class="form-label">الفرع</label>
                    <select name="branch_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر فرع</option>
                        @foreach($branches as $branch)
                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="col-md-12 form-group">
                    <label class="form-label">ملاحظات</label>
                    <textarea name="note" class="editor" id="" cols="203" rows="10"></textarea>
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


