<div class="card">
    <div class="card-header">
        <h5>الملف الشخصي</h5>
    </div>
    <div class="card-body">
        <form class="row form" method="post" action="{{route('admin.saveProfile')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12 form-group">
                <label class="form-label">الاسم</label>
                <input value="{{auth('admin')->user()->name}}" name="name" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-12 form-group">
                <label class="form-label">البريد الالكتروني</label>
                <input value="{{auth('admin')->user()->email}}" name="email" class="form-control" type="text" placeholder="">
            </div>

            <div class="col-md-12 form-group">
                <label class="form-label">كلمة المرور</label>
                <input value="" name="password" class="form-control" type="password" placeholder="">
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
