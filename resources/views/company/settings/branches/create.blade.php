<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['create']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('branches.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 form-group">
                    <label class="form-label">اسم الفرع</label>
                    <input class="form-control" name="name" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">عنوان الفرع</label>
                    <input class="form-control" name="address" type="text" placeholder="">
                </div>
                <div class="col-md-12 form-group">
                    <label class="form-label">التفاصيل</label>
                    <textarea name="desc" class="editor" id="" cols="203" rows="10">{!! isset($blogs)?$blogs->description:'' !!}</textarea>
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">الشعار</label>
                    <input class="form-control photo" name="photo" id="photo" type="file">
                </div>
                <div class="col-md-6 form-group">
                    <img id="pic-prev" src="{{asset('assets/dashboard')}}/images/picture.svg" class="out-img pic-prev"/>
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



