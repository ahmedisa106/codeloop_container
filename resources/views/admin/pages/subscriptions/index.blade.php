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
                <select class="select2-custom">
                    <option value="">مفعل</option>
                    <option value="">منتظر التفعيل</option>
                    <option value="">منتهي</option>
                </select>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-air-primary btn-icon" type="submit">
                    <i class="fa fa-search"></i>
                    بحث
                </button>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered datatable text-center">
                <thead>
                    <tr>
                        <th>المؤسسه</th>
                        <th>الباقه</th>
                        <th>الحاله</th>
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
            url: '{{route('subscriptions.data')}}'
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
                name: 'status',
                data: 'status'
            },
            {
                name: 'actions',
                data: 'actions'
            },


        ]

    });

    table.buttons().container()
        .appendTo('#DataTables_Table_0_wrapper .col-md-6:eq(0)');

</script>
@endpush
