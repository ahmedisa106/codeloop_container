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


                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">


                    <table class="table table-bordered datatable text-center">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نوع الطلب</th>
                            <th>حاله الطلب</th>

                            <th>تفاصيل الطلب</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

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
            "order": [[0, 'desc']],
            ajax: {
                url: "{{route('driver-requests.data')}}"
            },
            columns: [


                {data: 'id', name: 'id'},
                {data: 'type', name: 'type'},
                {data: 'status', name: 'status'},
                {data: 'details', name: 'details'},


            ]
        });

        table.buttons().container().appendTo('#DataTables_Table_0_wrapper .col-md-6:eq(0)');

    </script>


@endpush
