@extends('company.layouts.master')
@section('content')


<div class="container-fluid">
    <div class="card">
    <div class="card-header">
            <h3>الطلبات</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>رقم الحاوية</th>
                            <th>التصنيف</th>
                            <th>اسم العميل</th>
                            <th>اسم المندوب</th>
                            <th>السعر</th>
                            <th>الحالة</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>15454</td>
                            <td>انقاض</td>
                            <td>جاسم الحربي</td>
                            <td>طلال بلال</td>
                            <td>16.500 ريال</td>
                            <td>
                                <div class="btns-table">
                                    <span class="btn delivered">
                                        تم التوصيل
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="btns-table">
                                    <a href="#" class="btn btn-dark btn-air-dark btn-icon">
                                        <i class="fa fa-eye"></i>
                                        معاينة الطلب
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>15454</td>
                            <td>انقاض</td>
                            <td>جاسم الحربي</td>
                            <td>طلال بلال</td>
                            <td>16.500 ريال</td>
                            <td>
                                <div class="btns-table">
                                    <span class="btn complete">
                                        مكتمل
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="btns-table">
                                    <a href="#" class="btn btn-dark btn-air-dark btn-icon">
                                        <i class="fa fa-eye"></i>
                                        معاينة الطلب
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>15454</td>
                            <td>انقاض</td>
                            <td>جاسم الحربي</td>
                            <td>طلال بلال</td>
                            <td>16.500 ريال</td>
                            <td>
                                <div class="btns-table">
                                    <span class="btn processing">
                                        جاري التنفيذ
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="btns-table">
                                    <a href="#" class="btn btn-dark btn-air-dark btn-icon">
                                        <i class="fa fa-eye"></i>
                                        معاينة الطلب
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>15454</td>
                            <td>انقاض</td>
                            <td>جاسم الحربي</td>
                            <td>طلال بلال</td>
                            <td>16.500 ريال</td>
                            <td>
                                <div class="btns-table">
                                    <span class="btn canceled">
                                        ملغي
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="btns-table">
                                    <a href="#" class="btn btn-dark btn-air-dark btn-icon">
                                        <i class="fa fa-eye"></i>
                                        معاينة الطلب
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
