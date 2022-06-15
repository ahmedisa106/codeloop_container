<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>ايجار حاوية</h3>
        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('container-rentals.store')}}">
                @csrf
                <div class="col-md-4 form-group">
                    <label class="form-label">نوع التعاقد</label>
                    <select name="contract_type" class="form-control select2-custom" id="">
                        <option value="cash">نقدي</option>
                        <option value="contract">تعاقد</option>
                    </select>
                </div>

                <div class="col-md-4 form-group contracts d-none">
                @permission('create_contracts')
                    <a href="{{route('contracts.create')}}" class="show_sub_modal">
                        <span aria-label="اضافة عقد" data-microtip-position="top" role="tooltip"><i class="fa fa-plus"></i></span>
                    </a>
                    @endpermission
                    <label class="form-label">رقم العقد</label>
                    <select name="contract_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر رقم العقد</option>
                        @foreach($contracts as $contract)
                            <option value="{{$contract->id}}">{{$contract->number}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 form-group">

                    @permission('create_categories')
                    <a href="{{route('categories.create')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="اضافة تصنيف" class="show_sub_modal"><i class="fa fa-plus"></i></a>

                    @endpermission
                    <label class="form-label">التصنيفات</label>
                    <select name="category_id" class="form-control select2-custom category_id" id="">
                        <option value="" disabled selected>إختر تصنيف</option>


                    </select>
                </div>
                <span class="loader-div d-none"></span>
                <div class="col-md-4 form-group">
                @permission('create_category-sizes')
                    <a href="{{route('category-sizes.create')}}" class="show_sub_modal">
                        <span aria-label="اضافة حجم" data-microtip-position="top" role="tooltip"><i class="fa fa-plus"></i></span>
                    </a>
                    @endpermission
                    <label class="form-label">حجم التصنيف</label>
                    <select name="category_size_id" class="form-control select2-custom category_size_id" id="">
                        <option value="">----</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    @permission('create_customers')
                    <a href="{{route('customers.create')}}" class="show_sub_modal">
                        <span aria-label="اضافة عميل" data-microtip-position="top" role="tooltip"><i class="fa fa-plus"></i></span>
                    </a>
                    @endpermission
                    <label class="form-label">العميل</label>
                    <select name="customer_id" class="form-control select2-custom customer_id" id="">
                        <option value="" disabled selected>إختر عميل</option>

                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">عنوان العميل</label>
                    <select name="customer_address_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>----</option>
                    </select>
                </div>


                <div class="col-md-4 form-group">
                @permission('create_containers')
                    <a href="{{route('containers.create')}}" class="show_sub_modal">
                        <span aria-label="اضافة حاوية" data-microtip-position="top" role="tooltip"><i class="fa fa-plus"></i></span>
                    </a>
                    @endpermission
                    <label class="form-label">رقم الحاوية</label>
                    <select name="container_id" class="form-control select2-custom container_id" id="">
                        <option value="" disabled selected>إختر رقم الحاوية</option>

                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label"> سعر التفريغة ( ر.س )</label>
                    <input class="form-control discharge_price" readonly value="0" name="discharge_price" type="text" placeholder="">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">عدد التفريغات</label>
                    <input class="form-control discharge_number" min="1" name="discharge_number" value="1" type="number" placeholder="">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">الخصم</label>
                    <input class="form-control discount" value="0" name="discount" type="number" placeholder="">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">الاجمالي بعد الخصم</label>
                    <input class="form-control total" name="total" type="number" placeholder="" readonly>
                </div>

                @role('admin')
                <div class="col-md-4 form-group">
                    <label class="form-label">المندوب</label>
                    <select name="messenger_id" class="form-control select2-custom messenger_id" id="">
                        <option value="" disabled selected>-----</option>

                    </select>
                </div>
                @endrole

                <h3 class="title-h3">مدة الايجار</h3>
                <div class="col-md-4 form-group">
                    <label class="form-label">من تاريخ</label>
                    <input name="start_at" class="datepicker-here form-control" type="text">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">الى تاريخ</label>
                    <input name="end_at" class="datepicker-here form-control" type="text">
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary btn-air-primary btn-icon" type="submit">
                        <i class="fa fa-save"></i>
                        حفظ
                    </button>
                    <button class="btn btn-danger exsit_modal btn-air-danger btn-icon" type="button"
                            data-bs-dismiss="modal">
                        <i class="fa fa-times"></i>
                        خروج
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
<script>


    $('select[name="contract_type"]').on('change', function () {
        if ($(this).val() == 'contract') {
            $('.contracts').removeClass('d-none');
        } else {
            $('.contracts').addClass('d-none');
        }
    })

    $('select[name="category_id"]').on('change', function () {
        getCategorySizes($(this).val());
        getMessengers($(this).val())
    });

    function getMessengers(cat_id) {
        $('select[name="messenger_id"]').empty();
        $.ajax({
            type: 'get',
            url: "{{route('containers.getMessengers')}}",
            data: {
                cat_id
            },
            success: function (res) {
                let html = `<option selected disabled>إختر مندوب</option>`;
                $.each(res.data, function (key, value) {
                    html += `<option value="${value.id}">${value.name}</option>`
                    $('select[name="messenger_id"]').html(html);
                })
            }
        })
    }


    $('select[name="customer_id"]').on('change', function () {
        let id = $(this).val();

        $.ajax({
            type: 'get',
            url: '{{route('customers.getCustomerAddresses')}}',
            data: {
                id: id,
            },

            success: function (res) {
                let html = `<option selected disabled>إختر عنوان العميل</option>`;
                $.each(res.data, function (key, value) {
                    html += `<option value="${value.id}">${value.address}</option>`
                    $('select[name="customer_address_id"]').html(html);
                })
            },

        })

    })


    $('select[name="container_id"]').on('change', function () {
        let id = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{route('containers.getDischargePrice')}}',
            data: {
                id: id,
            },

            success: function (res) {
                $('input[name="discharge_price"] , .total').val(res.data);
                $('.discount').val(0);
                $('.discharge_number').val(1);
            },

        })
    });

    $('.discharge_number , .discount ,.discharge_price').on('input', function () {
        calcTotal();
    })

    function calcTotal() {
        let discount = $('.discount').val(),
            dischargePrice = $('.discharge_price').val(),
            dischargeNumber = $('.discharge_number').val();

        let total = (dischargeNumber * dischargePrice) - discount;
        $('.total').val(total)
    };

    function getCategorySizes(id = null) {
        $.ajax({
            type: 'get',
            url: '{{route('categories.getCategorySizes')}}',
            data: {
                id: id,
            },
            beforeSend: function () {
                $('.loader-div').removeClass('d-none');
            },
            success: function (res) {
                let html = `<option selected disabled>إختر حجم التصنيف</option>`;
                $.each(res.data, function (key, value) {
                    html += `<option value="${value.id}">${value.size}</option>`
                    $('select[name="category_size_id"]').html(html);
                })
            },
            complete: function () {
                $('.loader-div').addClass('d-none');
            }
        })
    };


    $('.category_size_id').on('change', function () {
        $('.container_id').empty();
        let cat_id = $('.category_id').val();
        let cat_size_id = $(this).val();
        getContainers(cat_id, cat_size_id)
    })

    function getContainers(cat_id, cat_size_id) {
        $.ajax({
            type: 'get',
            url: '{{route('container-rentals.getContainers')}}',
            data: {
                'cat_id': cat_id,
                'cat_size_id': cat_size_id,
            },

            success: function (res) {
                let html = `<option selected disabled>إختر رقم حاوية</option>`;
                $.each(res.data, function (key, value) {
                    html += `<option value="${value.id}">${value.number}</option>`
                    $('.container_id').html(html);
                })
            }
        })
    }

    $(document).ready(function () {
        getCustomers();
        getCategories();
    });


</script>
