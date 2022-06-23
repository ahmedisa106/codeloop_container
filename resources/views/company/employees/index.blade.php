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

                    @permission('delete_employees')
                    <a href="javascript:void(0);" id="delete_all" class="btn btn-danger btn-air-danger btn-icon d-none delete_all">
                        <i class="fa fa-trash"></i>
                        حذف المحدد
                    </a>
                    @endpermission
                    @permission('export_employees')
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
                    @permission('create_employees')
                    <a href="{{route('employees.create')}}" data-model_title="الفروع" class="btn btn-primary show_modal btn-air-primary btn-icon ">
                        <i class="fa fa-plus"></i>
                        {{$data['create']}}
                    </a>
                    @endpermission

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('employees.bulkDelete')}}" id="delete_all_form" method="post">
                        @csrf
                        <table class="table table-bordered datatable text-center">
                            <thead>
                            <tr>
                                @permission('delete_employees')
                                <th>
                                    <div class="checkbox checkbox-primary">
                                        <input id="check_all" type="checkbox">
                                        <label for="check_all">تحديد الكل</label>
                                    </div>
                                </th>
                                @endpermission

                                <th>الإسم</th>
                                <th>البريد الإلكتروني</th>
                                <th>الوظيفه</th>
                                <th>الهاتف</th>
                                <th>الصوره</th>
                                @permission(['delete_employees', 'update_employees'])
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
                url: "{{route('employees.data')}}"
            },
            columns: [

            @permission('delete_employees')
                {data: 'check_item', name: 'check_item', orderable: false, searchable: false},
            @endpermission
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'job_type', name: 'job_type'},
                {data: 'phone', name: 'phone'},
                {data: 'photo', name: 'photo'},
            @permission(['delete_employees', 'update_employees'])
                {data: 'actions', name: 'actions'},
            @endpermission


            ]
        });

        table.buttons().container().appendTo('#DataTables_Table_0_wrapper .col-md-6:eq(0)');

    </script>


@endpush
