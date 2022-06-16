<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['edit']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('containers.update',$container->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <input type="hidden" value="{{$container->id}}" name="id">
                <div class="col-md-6 form-group">
                    <label class="form-label">رقم الحاوجيه</label>
                    <input class="form-control" name="number" value="{{$container->number}}" type="text" placeholder="">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">التصنيف</label>
                    <select name="category_id" class="form-control select2-custome" id="">
                        <option value="" disabled selected>إختر تصنيف</option>
                        @foreach($categories as $category)
                            <option {{$container->category_id== $category->id ? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                </div>
                <span class="loader-div d-none"></span>
                <div class="col-md-6 form-group">
                    <label class="form-label">حجم الحاوية</label>
                    <select name="category_size_id" class="form-control select2-custome" id="">
                        <option value="">إختر حجم الحاوية</option>
                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label">الفرع</label>
                    <select name="branch_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر فرع</option>
                        @foreach($branches as $branch)
                            <option {{$container->branch_id == $branch->id ? 'selected':''}} value="{{$branch->id}}">{{$branch->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">سعر التفريغ</label>
                    <input class="form-control" value="{{$container->price}}" name="price" min="0" type="number">
                </div>
                <div class="col-md-6 form-group">
                    <label class="form-label">الحاله</label>
                    <select name="status" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر فرع</option>
                        <option {{$container->status =='available' ?'selected':''}} value="available">في المستودع</option>
                        <option {{$container->status =='notAvailable' ?'selected':''}} value="notAvailable">داخل فتره الإيجار</option>
                        <option {{$container->status =='pending' ?'selected':''}} value="pending">مده الإيجار منتهيه ولم تأتي المستودع</option>
                        <option {{$container->status =='wasted' ?'selected':''}} value="wasted">تالفه</option>


                    </select>
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

    $(document).ready(function () {
        let id = $('select[name="category_id"]').val(),
            url = "{{route('categories.getCategorySizes')}}";

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
                let html = `<option selected disabled>إختر حجم الحاوية</option>`;
                $.each(res.data, function (key, value) {
                    let selected = value.id == '{{$container->category_size_id}}' ? 'selected' : '';
                    html += `<option ${selected} value="${value.id}">${value.size}</option>`
                    $('select[name="category_size_id"]').html(html);
                })
            },
            complete: function () {
                $('.loader-div').addClass('d-none');
            }
        })
    })
    $('select[name="category_id"]').on('change', function () {
        let id = $(this).val(),
            url = "{{route('categories.getCategorySizes')}}";

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
                let html = `<option selected disabled>إختر حجم الحاوية</option>`;
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
