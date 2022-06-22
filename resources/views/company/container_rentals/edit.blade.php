<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['edit']}}</h3>
        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('container-rentals.update',$containerRental->id)}}">
                @csrf
                @method('put')


                <div class="col-md-4 form-group">

                    <label class="form-label">رقم الحاوية</label>
                    <input type="number" value="{{$containerRental->container->number}}" class="form-control" readonly>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label"> سعر التفريغة ( ر.س )</label>
                    <input class="form-control discharge_price" readonly value="{{$containerRental->discharge_price}}" name="discharge_price" type="text" placeholder="">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">عدد التفريغات</label>
                    <input class="form-control discharge_number" min="{{isset($containerRental->discharges) ?$containerRental->discharges->count() :1 }}" name="discharge_number" value="{{$containerRental->discharge_number}}" type="number" placeholder="">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">الخصم</label>
                    <input class="form-control discount" name="discount" value="{{$containerRental->discount}}" type="number" placeholder="">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">الاجمالي بعد الخصم</label>
                    <input class="form-control total" name="total" type="number" value="{{$containerRental->total}}" placeholder="" readonly>
                </div>


                <div class="col-md-4 form-group">
                    <label class="form-label">من تاريخ</label>
                    <input name="start_at" readonly value="{{$containerRental->start_at}}" class=" form-control" type="text">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">الى تاريخ</label>
                    <input name="end_at" readonly value="{{$containerRental->end_at}}" class=" form-control" type="text">
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


</script>
