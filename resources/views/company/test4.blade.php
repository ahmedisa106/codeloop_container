@extends('company.layouts.master')
@section('content')


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>اضافة عقد</h3>
        </div>
        <div class="card-body">
            <form class="row form" method="post" action="" enctype="">
                <div class="col-md-4 form-group">
                    <label class="form-label">رقم العقد</label>
                    <input class="form-control" name="" type="number" placeholder="">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-air-primary btn-icon" type="submit">
                        <i class="fa fa-save"></i>
                        حفظ
                    </button>
                    <button class="btn btn-danger exsit_modal btn-air-danger btn-icon" type="button"
                        data-bs-dismiss="modal">
                        <i class="fa fa-times"></i>
                        خروج
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>



@endsection
