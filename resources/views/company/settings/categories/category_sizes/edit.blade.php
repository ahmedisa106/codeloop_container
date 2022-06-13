<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['edit']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('category-sizes.update',$categorySize->id)}}">
                @csrf
                @method('put')
                <div class="col-md-6 form-group">
                    <label class="form-label">اسم التصنيف</label>
                    <select name="category_id" class="select2-custom select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                        @foreach($categories as $category)
                            <option {{$categorySize->category_id == $category->id ?'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">الحجم</label>
                    <input value="{{$categorySize->size}}" name="size" min="0" class="form-control" type="number" placeholder="">
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
