<div class="card">
    <div class="card-header">
        <h5>الملف الشخصي</h5>
    </div>
    <div class="card-body">
        <form class="row form" method="post" action="" enctype="multipart/form-data">
            <div class="col-md-12 form-group">
                <label class="form-label">الاسم</label>
                <input value="" name="" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-12 form-group">
                <label class="form-label">البريد الالكتروني</label>
                <input value="" name="" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-12 form-group">
                <label class="form-label">الهاتف</label>
                <input value="" name="" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-12 form-group">
                <label class="form-label">كلمة المرور</label>
                <input value="" name="" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-11">
                        <label class="form-label">الصورة</label>
                        <input name="logo" class="form-control photo" id="photo" type="file">
                    </div>
                    <div class="col-md-1">
                        <img id="pic-prev" src="{{asset('default/default.png')}}" class="out-img pic-prev">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-danger exsit_modal btn-air-danger btn-icon" type="button"
                    data-bs-dismiss="modal">
                    <i class="fa fa-times"></i>
                    خروج
                </button>
            </div>
        </form>
    </div>

</div>
