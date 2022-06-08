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
                    @permission('delete_apps')
                    <a href="javascript:void();" id="delete_all" class="btn btn-danger btn-air-danger btn-icon d-none delete_all">
                        <i class="fa fa-trash"></i>
                        حذف المحدد
                    </a>
                    @endpermission
                    @permission('create_apps')
                    <a href="{{route('apps.create')}}" class="btn btn-primary show_modal btn-air-primary btn-icon ">
                        <i class="fa fa-plus"></i>
                        {{$data['create']}}
                    </a>
                    @endpermission
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('apps.bulkDelete')}}" id="delete_all_form" method="post">
                        @csrf
                        <table class="table table-bordered datatable text-center">
                            <thead>
                            <tr>
                                @permission('delete_apps')
                                <th>
                                    <div class="checkbox checkbox-primary">
                                        <input id="check_all" type="checkbox">
                                        <label for="check_all">تحديد الكل</label>
                                    </div>
                                </th>
                                @endpermission

                                <th>الإسم</th>
                                @permission(['update_apps'])
                                <th>الحاله</th>
                                @endpermission
                                @permission(['delete_apps','update_apps'])
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
                "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/ar.json"
            },
            ajax: {
                url: "{{route('apps.data')}}"
            },
            columns: [
            @permission(['delete_apps'])
                {data: 'check_item', name: 'check_item', orderable: false, searchable: false},
            @endpermission

                {data: 'ar_model', name: 'ar_model'},
            @permission(['update_apps'])
                {data: 'status', name: 'status'},
            @endpermission
            @permission(['delete_apps', 'update_apps'])
                {data: 'actions', name: 'actions'},
            @endpermission

            ]
        });

        table.buttons().container()
            .appendTo('#DataTables_Table_0_wrapper .col-md-6:eq(0)');


    </script>


@endpush
