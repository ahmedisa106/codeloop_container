<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['create']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('customers.update',$customer->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" value="{{$customer->id}}" name="id">
                <div class="col-md-4 form-group">
                    <label class="form-label">الإسم</label>
                    <input class="form-control" name="name" value="{{$customer->name}}" type="text" placeholder="">
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label">البريد الإلكتروني</label>
                    <input class="form-control" name="email" value="{{$customer->email}}" type="email" placeholder="">
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label">الهاتف</label>
                    <input class="form-control" name="phone" value="{{$customer->phone}}" type="number" placeholder="">
                </div>


                <div class="col-md-4 btn-add-add">
                    <a class="btn btn-primary">اضافة عنوان آخر</a>
                </div>

                <div class="box-add">
                    @foreach($customer->addresses as $index => $address)
                        <div class="box-all">
                            <div class="box-div">
                                <label class="form-label">العنوان</label>
                                <input class="form-control" name="address[{{$index}}][customer_address_id]" value="{{$address->id}}" type="text" placeholder="">
                                <input class="form-control" name="address[{{$index}}][address]" value="{{$address->address}}" type="text" placeholder="">
                            </div>
                            <div class="box-div">
                                <label class="form-label">خطوط الطول</label>
                                <input class="form-control" name="address[{{$index}}][latitude]" value="{{$address->latitude}}" type="text" placeholder="">
                            </div>
                            <div class="box-div">
                                <label class="form-label">دوائر العرض</label>
                                <input class="form-control" name="address[{{$index}}][longitude]" value="{{$address->longitude}}" type="text" placeholder="">
                            </div>
                            @if(!$loop->first)
                                <i class="fa fa-times delete-address-box"></i>
                            @endif

                        </div>
                    @endforeach

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
    $(function () {
        let index = {{$customer->addresses->count() -1}};
        $('.btn-add-add a').on('click', function () {

            index++;
            let html = `
             <div class="box-all">
                        <div class="box-div">
                            <label class="form-label">العنوان</label>
                            <input class="form-control" name="address[${index}][address]" type="text" placeholder="">
                        </div>
                        <div class="box-div">
                            <label class="form-label">خطوط الطول</label>
                            <input class="form-control" name="address[${index}][latitude]" type="text" placeholder="">
                        </div>
                        <div class="box-div">
                            <label class="form-label">دوائر العرض</label>
                            <input class="form-control" name="address[${index}][longitude]" type="text" placeholder="">
                        </div>
                        <i class="fa fa-times delete-address-box"></i>
                    </div>
        `;

            $('.box-add').append(html);
        })
        $(document).on('click', '.delete-address-box', function () {
            $(this).parents('.box-all').remove();
        })
    })

</script>
