<div class="card">
    <div class="card-header">
        <h3>{{$data['page_title']}}</h3>
        <div class="btns-header">

        </div>
    </div>
    <div class="card-body">
        <form class="row form" method="post" action="{{route('settings.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 form-group">
                <label class="form-label">اسم الموقع</label>
                <input value="{{isset($setting) ? $setting->name:''}}" name="name" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-6 form-group">
                <label class="form-label">البريد الإلكتروني</label>
                <input value="{{isset($setting) ? $setting->email:''}}" name="email" class="form-control" type="email" placeholder="">
            </div>
            <div class="col-md-6 form-group">
                <label class="form-label">العنوان</label>
                <input value="{{isset($setting) ? $setting->address:''}}" class="form-control" name="address" type="text" placeholder="">
            </div>
            <div class="col-md-6 form-group">
                <label class="form-label">الهاتف</label>
                <input value="{{isset($setting) ? $setting->mobile:''}}" class="form-control" type="text" name="mobile" placeholder="">
            </div>
            <div class="col-md-6 form-group">
                <label class="form-label">الفيس بوك</label>
                <input value="{{isset($setting) ? $setting->facebook:''}}" class="form-control" type="url" name="facebook" placeholder="">
            </div>
            <div class="col-md-6 form-group">
                <label class="form-label">انستجرام</label>
                <input value="{{isset($setting) ? $setting->instagram:''}}" class="form-control" type="url" name="instagram" placeholder="">
            </div>

            <div class="col-md-6 form-group">
                <div class="row">
                    <div class="col-md-10 form-group">
                        <label class="form-label">الشعار</label>
                        <input name="logo" class="form-control" id="photo" type="file">
                    </div>
                    <div class="col-md-2  form-group">

                        <img id="pic-prev" src="{{isset($setting)? $setting->image : asset('default/default.png')}}" class="out-img"/>

                    </div>
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
