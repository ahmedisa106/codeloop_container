<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['edit']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('apps.update',$app->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')

                <input type="hidden" name="id" value="{{$app->id}}">
                <div class="col-md-6 form-group">
                    <label class="form-label">الإسم</label>
                    <input value="{{$app->model}}" required class="form-control" name="model" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">الإسم باللغه العربيه</label>
                    <input value="{{$app->ar_model}}" required class="form-control" name="ar_model" type="text" placeholder="">
                </div>

                <div class="switch-showcase">
                    <div class="media">
                        <label class="col-form-label">تفعيل</label>
                        <div class="icon-state">
                            <label class="switch">
                                <input name="status" value="active" {{$app->status =='active'?'checked':''}} class="pending_company" type="checkbox"><span class="switch-state"></span>
                            </label>
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
</div>



