@extends('company.layouts.master')
@section('content')


<div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3>العقود</h3>
                    <div class="btns-header">
                    <a href="javascript:void(0);" id="delete_all" class="btn btn-danger btn-air-danger btn-icon d-none delete_all">
                        <i class="fa fa-trash"></i>
                        حذف المحدد
                    </a>
                        <div class="dropdown-basic">
                        <div class="dropdown">
                            <button class="dropbtn btn-info btn-air-info btn-icon" type="button">
                                <span><i class="fa fa-chevron-down"></i></span>
                                استيراد وتحميل
                            </button>
                            <div class="dropdown-content">
                                <a href="" id="export_file">
                                    <i class="fa fa-download"></i>
                                    تحميل مثال
                                </a>
                                <div class="upload-div">
                                    <label for="upload-file">
                                        <i class="fa fa-cloud-upload"></i>
                                        استيراد بيانات
                                    </label>
                                    <form id="import_form" action="" type="post">
                                        @csrf
                                        <input data-url="" name="import_file" type="file" id="upload-file">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                        <a href="#" class="btn btn-primary btn-air-primary btn-icon">
                                    <i class="fa fa-plus"></i>
                                    اضافة عقد
                                </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox checkbox-primary">
                                            <input id="inline-1" type="checkbox">
                                            <label for="inline-1">تحديد الكل</label>
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-primary custom-check">
                                            <input id="inline-2" type="checkbox">
                                            <label for="inline-2"></label>
                                        </div>
                                    </td>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                    <td>
                                        <div class="btns-table">
                                            <a href="#" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                                تعديل
                                            </a>
                                            <a href="#" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                                حذف
                                            </a>
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
