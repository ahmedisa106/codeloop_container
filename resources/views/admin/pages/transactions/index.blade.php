@extends('admin.layouts.master')
@push('title',$data['page_title'])
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{$data['page_title']}}</h3>

        </div>
        <div class="card-body">
            <div class="table-responsive">

                    <table class="table table-bordered datatable text-center">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>التعامل</th>
                            <th>المبلغ</th>
                        </tr>

                        </thead>


                        <tbody>
                        @foreach($transactions as $index=> $transaction)
                            <tr>
                                <td>{{++$index}}</td>
                                <td>{{$transaction->body}}</td>
                                <td>{{$transaction->total}}</td>
                            </tr>
                        @endforeach





                        </tbody>

                        <tfooter>
                            <tr>
                                <td colspan="1" style="color: red; font-weight: bold">الإجمالي</td>
                                <td colspan="2" style="color: red; font-weight: bold">{{$transactions->sum('total')}} ر . س  </td>
                            </tr>
                        </tfooter>

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
            buttons: ['excel', 'pdf', 'print'],
        });
        table.buttons().container()
            .appendTo('#DataTables_Table_0_wrapper .col-md-6:eq(0)');
    </script>
@endpush

