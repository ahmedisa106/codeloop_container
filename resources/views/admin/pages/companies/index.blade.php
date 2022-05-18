@extends('admin.layouts.master')
@push('title',$data['page_title'])
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{$data['page_title']}}</h3>
            <div class="btns-header">
                <a href="#" class="btn btn-danger btn-air-danger btn-icon">
                    <i class="fa fa-trash"></i>
                    حذف الكل
                </a>
                <div class="dropdown-basic">
                    <div class="dropdown">
                        <button class="dropbtn btn-info btn-air-info btn-icon" type="button">
                            <span><i class="fa fa-chevron-down"></i></span>
                            استيراد وتحميل
                        </button>
                        <div class="dropdown-content">
                            <a href="#">
                                <i class="fa fa-download"></i>
                                تحميل مثال
                            </a>
                            <a href="#">
                                <i class="fa fa-cloud-upload"></i>
                                استيراد بيانات
                            </a>
                        </div>
                    </div>
                </div>
                <a href="{{route('companies.create')}}" class="btn btn-primary show_modal btn-air-primary btn-icon">
                    <i class="fa fa-plus"></i>
                    {{$data['create']}}
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered datatable text-center">
                    <thead>
                    <tr>
                        <th>
                            <div class="checkbox checkbox-primary">
                                <input id="inline-1" type="checkbox">
                                <label for="inline-1">تحديد الكل</label>
                            </div>
                        </th>

                        <th>إسم المؤسسه</th>
                        <th>الشعار</th>
                        <th>التحكم</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
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
            ajax: {
                url: '{{route('companies.data')}}'
            },
            columns: [

                {
                    name: 'id', data: 'id'
                },
                {
                    name: 'name', data: 'name'
                },
                {
                    name: 'logo', data: 'logo'
                },
                {
                    name: 'actions', data: 'actions'
                },

            ]

        });

        table.buttons().container()
            .appendTo('#DataTables_Table_0_wrapper .col-md-6:eq(0)');


    </script>
@endpush

