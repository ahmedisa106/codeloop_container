<div class="card">
    <div class="card-header">
        <h3>{{$data['create']}}</h3>
        <div class="btns-header">

        </div>
    </div>
    <div class="card-body">
        <form class="row form" method="post" action="{{route('packages.update',$package->id)}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{$package->id}}">
            <div class="col-md-12 form-group">
                <label class="form-label">إسم الباقه</label>
                <input value="{{isset($package) ? $package->title:''}}" name="title" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-12 form-group">
                <label class="form-label">مده الباقه <span class="text-danger"> ( بالشهور )  </span></label>
                <input type="number" min="1" value="{{$package->period}}" name="period" class="form-control">
            </div>
            <div class="col-md-12 form-group">
                <label class="form-label">سعر الباقه</label>
                <input type="number" min="0" value="{{$package->price}}" name="price" class="form-control">
            </div>


            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-11 form-group">
                        <label class="form-label">الصوره</label>
                        <input name="photo" class="form-control photo" id="photo" type="file">
                    </div>
                    <div class="col-md-1  form-group">
                        <img id="pic-prev" src="{{isset($package)? $package->image : asset('default/default.png')}}" class="out-img pic-prev"/>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="seo-div">
                    <h4>بيانات السيو (SEO)</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label">عنوان الميتا</label>
                            <input value="{{$package->meta_title}}" name="meta_title" class="form-control"
                                   type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="form-label">وصف الميتا</label>
                            <input value="{{$package->meta_description}}" name="meta_description" class="form-control"
                                   type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="form-label">الكلمات الدلالية</label>
                            <input value="{{$package->meta_keywords}}" name="meta_keywords" class="form-control"
                                   type="text" placeholder="">
                        </div>
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
