<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['edit']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('categories.update',$category->id)}}">
                @method('put')
                @csrf
                <input type="hidden" name="id" value="{{$category->id}}">
                <div class="col-md-6 form-group">
                    <label class="form-label">اسم التصنيف</label>
                    <input name="name" value="{{$category->name}}" class="form-control" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">وحدة القياس</label>
                    <input name="unit" value="{{$category->unit}}" class="form-control" type="text" placeholder="">
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
