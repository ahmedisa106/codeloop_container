<div class="card">
    <div class="card-header">
        <h3>{{$data['create']}}</h3>
        <div class="btns-header">

        </div>
    </div>
    <div class="card-body">
        <form class="row form" method="post" action="{{route('sliders.update',$slider->id)}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="col-md-12 form-group">
                <label class="form-label">العنوان</label>
                <input value="{{isset($slider) ? $slider->title:''}}" name="title" class="form-control" type="text" placeholder="">
            </div>


            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-11 form-group">
                    <label class="form-label">الصورة <span>يفضل مقاس الصورة ( 900 طول * 1660 عرض )</span></label>
                        <input name="photo" class="form-control photo" id="photo" type="file">
                    </div>
                    <div class="col-md-1 form-group">
                        <img id="pic-prev" src="{{isset($slider)? $slider->image : asset('default/default.png')}}" class="out-img pic-prev"/>
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
