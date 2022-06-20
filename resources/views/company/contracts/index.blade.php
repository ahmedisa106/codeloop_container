@extends('company.layouts.master')
@push('title')
    {{$data['page_title']}}
@endpush
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>العقود</h3>
            </div>
            <div class="card-body">
                <form class="row " method="post">
                    @csrf
                    <div class="col-md-4 form-group">
                        <label class="form-label">اسم العميل</label>
                        <select name="customer" class="form-control select2-custom customer" id="">
                            <option value="">الكل</option>
                            @foreach($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                <option value="10">asd</option>
                            @endforeach


                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="form-label">المندوب المسؤول</label>
                        <select name="messenger" class="form-control select2-custom messenger" id="">
                            <option value="">الكل</option>
                            @foreach($messengers as $messenger)
                                <option value="{{$messenger->id}}">{{$messenger->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="form-label">حالة العقد</label>
                        <select name="" class="form-control select2-custom" id="">
                            <option value="">الكل</option>
                            <option value="">ساري</option>
                            <option value="">منتهي</option>
                            <option value="">ملغي</option>
                        </select>
                    </div>
                    <h3 class="title-h3">الفترة</h3>
                    <div class="col-md-4 form-group">
                        <label class="form-label">من تاريخ</label>
                        <input class="datepicker form-control" type="text">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="form-label">الى تاريخ</label>
                        <input class="datepicker form-control" type="text">
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-air-primary btn-icon search-btn" type="submit">
                            <i class="fa fa-search"></i>
                            بحث
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>{{$data['page_title']}}</h3>
                <div class="btns-header">

                    @permission('delete_contracts')
                    <a href="javascript:void(0);" id="delete_all" class="btn btn-danger btn-air-danger btn-icon d-none delete_all">
                        <i class="fa fa-trash"></i>
                        حذف المحدد
                    </a>
                    @endpermission


                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('contracts.bulkDelete')}}" id="delete_all_form" method="post">
                        @csrf
                        <table class="table table-bordered datatable text-center">
                            <thead>
                            <tr>

                            <tr>
                                <th>رقم العقد</th>
                                <th>اسم العميل</th>
                                <th>تاريخ كتابة العقد</th>
                                <th>تاريخ إنتهاء العقد</th>
                                <th>المندوب المسؤول</th>
                                <th>حالة العقد</th>
                                <th>معاينة</th>
                            </tr>

                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script>

        var table = $('.table.datatable').DataTable({
            dom: 'lBfrtip',
            lengthChange: true,
            processing: true,
            serverSide: true,
            buttons: ['excel', 'pdf', 'print'],
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/ar.json"
            },
            ajax: {
                url: "{{route('contracts.data')}}",
                data: function (d) {
                    d.customer = $('.customer').val();
                    d.messenger = $('.messenger').val();
                }
            },
            columns: [


                {data: 'number', name: 'number'},
                {data: 'customer', name: 'customer'},
                {data: 'start_at', name: 'start_at'},
                {data: 'end_at', name: 'end_at'},
                {data: 'messenger', name: 'messenger'},
                {data: 'status', name: 'status'},
                {data: 'contract', name: 'contract'},


            ]
        });

        table.buttons().container().appendTo('#DataTables_Table_0_wrapper .col-md-6:eq(0)');


        $('.search-btn').on('click', function (e) {
            e.preventDefault();
            table.draw();
        })
    </script>


@endpush
