<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['create']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('containers.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 form-group">
                    <label class="form-label">رقم الحاوجيه</label>
                    <input class="form-control" name="number" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">التصنيف</label>
                    <select name="category_id" class="form-control select2-custome" id="">
                        <option value="" disabled selected>إختر تصنيف</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                </div>
                <span class="loader-div d-none"></span>
                <div class="col-md-6 form-group">
                    <label class="form-label">حجم الحاويه</label>
                    <select name="category_size_id" class="form-control select2-custome" id="">
                        <option value="">إختر حجم الحاويه</option>
                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label">الفرع</label>
                    <select name="branch_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر فرع</option>
                        @foreach($branches as $branch)
                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">سعر التفريغ</label>
                    <input class="form-control" name="price" min="0" type="number">
                </div>
                <div class="switch-showcase">
                    <div class="media">
                        <label class="col-form-label">نشط</label>
                        <div class="icon-state">
                            <label class="switch">
                                <input class="" name="status" value="active" type="checkbox">
                                <span class="switch-state"></span>
                            </label>
                        </div>
                        <label class="col-form-label">غير نشط</label>
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
<script>
    $('select[name="category_id"]').on('change', function () {
        let id = $(this).val(),
            url = "{{route('containers.getCategorySizes')}}";

        $.ajax({
            type: 'get',
            url: url,
            data: {
                id: id,
            },
            beforeSend: function () {
                $('.loader-div').removeClass('d-none');
            },
            success: function (res) {
                let html = `<option selected disabled>إختر حجم الحاويه</option>`;
                $.each(res.data, function (key, value) {
                    html += `<option value="${value.id}">${value.size}</option>`
                    $('select[name="category_size_id"]').html(html);
                })
            },
            complete: function () {
                $('.loader-div').addClass('d-none');
            }
        })

    })
</script>
