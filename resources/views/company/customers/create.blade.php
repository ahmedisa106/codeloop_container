<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['create']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('customers.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-4 form-group">
                    <label class="form-label">الإسم</label>
                    <input class="form-control" name="name" type="text" placeholder="">
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label">البريد الإلكتروني</label>
                    <input class="form-control" name="email" type="email" placeholder="">
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label">الهاتف</label>
                    <input class="form-control" name="phone" type="number" placeholder="">
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label">العنوان</label>
                    <input class="form-control" name="address[]" type="text" placeholder="">
                </div>

                <div class="col-md-4 btn-add-add">
                    <a class="btn btn-primary">اضافة عنوان آخر</a>
                </div>

                <div class="box-add">

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
    $('.btn-add-add a').on('click', function () {

        let html = `
             <div class="box-div">
                        <input class="form-control" name="address[]" type="text" placeholder="اكتب عنوان ">
                        <i class="fa fa-times delete-address-box"></i>
              </div>
        `;

        $('.box-add').append(html);
    })

    $(document).on('click', '.delete-address-box', function () {
        $(this).parents('.box-div').remove();
    })
</script>
