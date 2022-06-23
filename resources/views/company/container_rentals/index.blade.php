@extends('company.layouts.master')
@push('title')
    {{$data['page_title']}}
@endpush
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>{{$data['page_title']}}</h3>
                <div class="btns-header">

                    @permission('delete_container-rentals')
                    <a href="javascript:void(0);" id="delete_all" class="btn btn-danger btn-air-danger btn-icon d-none delete_all">
                        <i class="fa fa-trash"></i>
                        حذف المحدد
                    </a>
                    @endpermission
                    @permission('export_container-rentals')
                    <div class="dropdown-basic">
                        <div class="dropdown">
                            <button class="dropbtn btn-info btn-air-info btn-icon" type="button">
                                <span><i class="fa fa-chevron-down"></i></span>
                                استيراد وتحميل
                            </button>
                            <div class="dropdown-content">
                                <a href="" id="export_file">
                                    <i class="fa fa-download"></i>
                                    تحميل مثال
                                </a>
                                <div class="upload-div">
                                    <label for="upload-file">
                                        <i class="fa fa-cloud-upload"></i>
                                        استيراد بيانات
                                    </label>
                                    <form id="import_form" action="" type="post">
                                        @csrf
                                        <input data-url="" name="import_file" type="file" id="upload-file">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endpermission
                    @permission('create_container-rentals')
                    <a href="{{route('container-rentals.create')}}" class="btn btn-primary show_modal btn-air-primary btn-icon ">
                        <i class="fa fa-plus"></i>
                        {{$data['create']}}
                    </a>
                    @endpermission
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('container-rentals.bulkDelete')}}" id="delete_all_form" method="post">
                        @csrf
                        <table class="table table-bordered datatable text-center">
                            <thead>
                            <tr>
                                @permission('delete_container-rentals')
                                <th>
                                    <div class="checkbox checkbox-primary">
                                        <input id="check_all" type="checkbox">
                                        <label for="check_all">تحديد الكل</label>
                                    </div>
                                </th>
                                @endpermission

                                <th>نوع التعاقد</th>
                                <th>العميل</th>
                                <th>عنوان العميل</th>
                                <th>الإجمالي</th>
                                <th>من</th>
                                <th>إلي</th>
                                <th>الحاله</th>
                                <th>تفاصيل الطلب</th>
                                @permission(['delete_container-rentals', 'update_container-rentals'])
                                <th>العمليات</th>
                                @endpermission
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
                "url": "{{asset('datatableLang.json')}}"
            },
            ajax: {
                url: "{{route('container-rentals.data')}}"
            },
            columns: [

            @permission('delete_container-rentals')
                {data: 'check_item', name: 'check_item', orderable: false, searchable: false},
            @endpermission
                {data: 'contract', name: 'contract'},
                {data: 'customer', name: 'customer'},
                {data: 'customer_address', name: 'customer_address'},
                {data: 'total', name: 'total'},
                {data: 'start_at', name: 'start_at'},
                {data: 'end_at', name: 'end_at'},
                {data: 'status', name: 'status'},
                {data: 'details', name: 'details'},

            @permission(['delete_container-rentals', 'update_container-rentals'])
                {data: 'actions', name: 'actions'},
            @endpermission


            ]
        });

        table.buttons().container().appendTo('#DataTables_Table_0_wrapper .col-md-6:eq(0)');

    </script>


@endpush
