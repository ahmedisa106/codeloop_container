@extends('admin.layouts.master')
@push('title',$data['page_title'])
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{$data['page_title']}}</h3>
            <div class="btns-header">
                <a href="#" id="delete_all" class="d-none btn  btn-danger btn-air-danger btn-icon">
                    <i class="fa fa-trash"></i>
                    حذف الكل
                </a>

                <a href="{{route('blogs.create')}}" class="btn btn-primary show_modal btn-air-primary btn-icon">
                    <i class="fa fa-plus"></i>
                    {{$data['create']}}
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form id="delete_all_form" action="{{route('blogs.bulkDelete')}}" method="post">
                    @csrf
                    <table class="table table-bordered datatable text-center">
                        <thead>
                        <tr>
                            <th>
                                <div class="checkbox checkbox-primary">
                                    <input id="check_all" type="checkbox">
                                    <label for="check_all">تحديد الكل</label>
                                </div>
                            </th>

                            <th>العنوان</th>
                            <th>الشعار</th>
                            <th>التحكم</th>
                        </tr>
                        </thead>


                        <tbody>


                        </tbody>

                    </table>
                </form>
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
                url: '{{route('blogs.data')}}'
            },
            columns: [
                {
                    name: 'check_item', data: 'check_item', sortable: false, searchable: false
                },
                {
                    name: 'title', data: 'title'
                },
                {
                    name: 'photo', data: 'photo'
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

