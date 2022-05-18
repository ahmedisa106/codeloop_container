<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['create']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('companies.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 form-group">
                    <label class="form-label">اسم المؤسسه</label>
                    <input name="name" class="form-control" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">رقم السجل التجاري</label>
                    <input name="commercial_number" class="form-control" type="number" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">رقم البطاقه الضريبيه</label>
                    <input name="tax_card_number" class="form-control" type="number" placeholder="">
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label">اسم المستخدم</label>
                    <input name="username" class="form-control" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">رقم الجوال</label>
                    <input name="phone" class="form-control" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">البريد الإلكتروني</label>
                    <input name="email" class="form-control" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">كلمه المرور</label>
                    <input name="password" class="form-control" type="password" placeholder="">
                </div>


                <div class="col-md-6 form-group">
                    <div class="switch-showcase">
                        <div class="media">
                            <label class="col-form-label">نشط</label>
                            <div class="icon-state">
                                <label class="switch">
                                    <input name="status" value="active" type="checkbox" checked=""><span class="switch-state"></span>
                                </label>
                            </div>
                            <label class="col-form-label">غير نشط</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label">الشعار</label>
                    <input name="logo" class="form-control" id="photo" type="file">
                </div>
                <div class="col-md-6">
                    <img id="pic-prev" src="{{asset('default/default.png')}}" class="out-img">
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
