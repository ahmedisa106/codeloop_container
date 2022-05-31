@extends('admin.layouts.master')
@push('title',$data['page_title'])
@section('content')
<div class="card">
    <div class="card-header">
        <h3>{{$data['page_title']}}</h3>
        <div class="btns-header">
            <a href="{{route('subscriptions.create')}}" class="btn btn-primary show_modal btn-air-primary btn-icon">
                <i class="fa fa-plus"></i>
                {{$data['create']}}
            </a>
        </div>
    </div>
    <div class="card-body">
        <form class="row" method="" action="">
            <div class="col-md-6 form-group">
                <label class="form-label">الحالة</label>
                <select  class="select2-custom status">
                    <option value="">الكل</option>
                    <option value="subscribed">مفعل</option>
                    <option value="pending">منتظر التفعيل</option>
                    <option value="finished">منتهي</option>
                </select>
            </div>

        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered datatable text-center block-first">
                <thead>
                    <tr>

                        <th>المؤسسه</th>
                        <th>الباقه</th>
                        <th>مده الباقه</th>
                        <th>سعر الباقه</th>
                        <th>المتبقي من الباقه</th>
                        <th>الحاله</th>


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
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/ar.json"
            },
        ajax: {
            url: '{{route('subscriptions.data')}}',
            data:function (d){
                d.status =$('.status').val()
            }
        },
        columns: [

            {
                name: 'company_id',
                data: 'company_id'
            },
            {
                name: 'package_id',
                data: 'package_id'
            },
            {
                name: 'period',
                data: 'period'
            },

            {
                name: 'price',
                data: 'price'
            },
            {
                name: 'diff',
                data: 'diff'
            },

            {
                name: 'actions',
                data: 'actions'
            },


        ]

    });

    table.buttons().container()
        .appendTo('#DataTables_Table_0_wrapper .col-md-6:eq(0)');

    $('.status').on('change',function (){
        table.draw()
    })

</script>
@endpush
