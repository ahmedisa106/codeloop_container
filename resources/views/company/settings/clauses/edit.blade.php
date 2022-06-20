<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['create']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('company-clauses.update',$clause->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="col-md-12 form-group">
                    <label class="form-label">البند</label>
                    <input class="form-control" value="{{$clause->clause}}" name="clause" type="text" placeholder="">
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


