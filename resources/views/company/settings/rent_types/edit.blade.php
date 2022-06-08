<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['edit']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('rent-types.update',$rentType->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')

                <input type="hidden" name="id" value="{{$rentType->id}}">
                <div class="col-md-12 form-group">
                    <label class="form-label">الإسم</label>
                    <input value="{{$rentType->name}}" required class="form-control" name="name" type="text" placeholder="">
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



