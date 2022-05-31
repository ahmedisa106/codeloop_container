@extends('admin.layouts.master')
@push('title',$data['page_title'])
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{$data['page_title']}}</h3>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered datatable text-center block-first block-last">
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

                        <tfoot>
                            <tr>
                                <td colspan="2" class="bold-font">الإجمالي</td>
                                <td class="bold-font">{{$transactions->sum('total')}} ر . س  </td>
                            </tr>
                        </tfoot>

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
            language: {
            "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/ar.json"
            }
        });
        table.buttons().container()
            .appendTo('#DataTables_Table_0_wrapper .col-md-6:eq(0)');
    </script>
@endpush

