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
                    <label class="form-label">رقم العقد</label>
                    <select name="contract_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر رقم العقد</option>
                        @foreach($contracts as $contract)
                            <option value="{{$contract->id}}">{{$contract->number}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">التصنيفات</label>
                    <select name="category_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر تصنيف</option>
                        @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach

                    </select>
                </div>
                <span class="loader-div d-none"></span>
                <div class="col-md-4 form-group">
                    <label class="form-label">حجم التصنيف</label>
                    <select name="category_size_id" class="form-control select2-custom" id="">
                        <option value="">----</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">العميل</label>
                    <select name="customer_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر عميل</option>
                        @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">عنوان العميل</label>
                    <select name="customer_address_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>----</option>
                    </select>
                </div>


                <div class="col-md-4 form-group">
                    <label class="form-label">رقم الحاوية</label>
                    <select name="container_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر رقم الحاويه</option>
                        @foreach($containers as $container)
                            <option value="{{$container->id}}">{{$container->number}}</option>
                        @endforeach
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
                    <input class="form-control total" name="total" type="number" placeholder="" disabled>
                </div>

                <h3 class="title-h3">مدة الايجار</h3>
                <div class="col-md-4 form-group">
                    <label class="form-label">من تاريخ</label>
                    <input name="start_at" class="datepicker-here form-control" type="text">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">الى تاريخ</label>
                    <input name="end_at" class="datepicker-here form-control" type="text">
                </div>
                <div class="line"></div>


                @role('admin')
                <div class="col-md-4 form-group">
                    <label class="form-label">المندوب</label>
                    <select name="messenger_id" class="form-control select2-custom" id="">
                        <option value="" disabled selected>إختر مندوب</option>
                        @foreach($messengers as $messenger)
                            <option value="{{$messenger->id}}">{{$messenger->name}}</option>
                        @endforeach
                    </select>
                </div>
                @endrole
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
        let id = $(this).val();

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

    })


    $('select[name="customer_id"]').on('change', function () {
        let id = $(this).val();

        $.ajax({
            type: 'get',
            url: '{{route('customers.getCustomerAddresses')}}',
            data: {
                id: id,
            },

            success: function (res) {
                let html = `<option selected disabled>إختر عميل</option>`;
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
    }
</script>
