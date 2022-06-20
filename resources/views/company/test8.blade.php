@extends('company.layouts.master')
@section('content')


<div class="container-fluid">
<div class="card">
    <div class="card-header">
        <h3>بنود العقد</h3>
        <div class="btns-header">
            <a href="#" class="btn btn-primary show_modal btn-air-primary btn-icon">
                <i class="fa fa-plus"></i>
                اضافة بند
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>البند</th>
                        <th>الحالة</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>لا يحق للطرف الثاني استخدام الحاوية في غير ما خصصت له .</td>
                        <td>
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
                        </td>
                        <td>
                            <div class="btns-table">
                                <a href="#"
                                    class="btn btn-primary btn-icon show_modal"> <i class="fa fa-edit"></i> تعديل</a>
                                <a href="#"
                                    class="btn btn-danger btn-icon delete_btn"> <i class="fa fa-close"></i> حذف</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>يجب على الطرف الثاني إبلاغ الطرف الاول حال امتلاء الحاوية او النتهاء منها .</td>
                        <td>
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
                        </td>
                        <td>
                            <div class="btns-table">
                                <a href="#"
                                    class="btn btn-primary btn-icon show_modal"> <i class="fa fa-edit"></i> تعديل</a>
                                <a href="#"
                                    class="btn btn-danger btn-icon delete_btn"> <i class="fa fa-close"></i> حذف</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>



@endsection
