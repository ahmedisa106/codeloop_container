<div class="card">
    <div class="card-header">
        <h3>{{$data['create']}}</h3>
        <div class="btns-header">

        </div>
    </div>
    <div class="card-body">
        <form class="row form" method="post" action="{{route('packages.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12 form-group">
                <label class="form-label">إسم الباقه</label>
                <input value="{{isset($package) ? $package->title:''}}" name="title" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-12 form-group">
                <label class="form-label">مده الباقه <span class="text-danger"> ( بالشهور )  </span></label>
                <input type="number" min="1" name="period" class="form-control">
            </div>


            <div class="col-md-12 form-group">
                <label class="form-label">سعر الباقه</label>
                <input type="number" min="0" name="price" class="form-control">
            </div>


            <div class="col-md-12-group">
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
