<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['create']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('apps.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 form-group">
                    <label class="form-label">الإسم</label>
                    <input class="form-control" name="model" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">الإسم باللغه العربيه</label>
                    <input class="form-control" name="ar_model" type="text" placeholder="">
                </div>

                <div class="switch-showcase">
                    <div class="media">
                        <label class="col-form-label">تفعيل</label>
                        <div class="icon-state">
                            <label class="switch">
                                <input name="status" value="active" class="pending_company" type="checkbox"><span class="switch-state"></span>
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



