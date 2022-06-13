<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['edit']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('moderators.update',$moderator->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{$moderator->id}}">
                <div class="col-md-6 form-group">
                    <label class="form-label">الإسم</label>
                    <input class="form-control" name="name" value="{{$moderator->name}}" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">البريد الإلكرتوني</label>
                    <input class="form-control" name="email" value="{{$moderator->email}}" type="email" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">الهاتف</label>
                    <input class="form-control" name="phone" value="{{$moderator->phone}}" type="number" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">كلمه المرور</label>
                    <input class="form-control" name="password" type="password">
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



