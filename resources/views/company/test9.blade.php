@extends('company.layouts.master')
@section('content')


<div class="card">
    <div class="card-header">
        <h3>اضافة بند</h3>
    </div>
    <div class="card-body">
    <form class="row form" method="post" action="" enctype="">
                <div class="col-md-6 form-group">
                    <label class="form-label">البند</label>
                    <input class="form-control" type="text">
                </div>
                <div class="col-md-6">
                <div class="switch-showcase">
                                <div class="media">
                                    <label class="col-form-label">نشط</label>
                                    <div class="icon-state">
                                        <label class="switch">
                                            <input class="" name="status" value="active" type="checkbox" checked>
                                            <span class="switch-state"></span>
                                        </label>
                                    </div>
                                    <label class="col-form-label">غير نشط</label>
                                </div>
                            </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary btn-air-primary btn-icon" type="submit">
                        <i class="fa fa-save"></i>
                        حفظ
                    </button>
                </div>
            </form>
    </div>
</div>



@endsection
