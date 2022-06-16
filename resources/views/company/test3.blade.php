@extends('company.layouts.master')
@section('content')


    <div class="card">
        <div class="card-header">
            <h3>العقود</h3>
        </div>
        <div class="card-body">
            <form class="row form" method="post" action="" enctype="">
                <div class="col-md-4 form-group">
                    <label class="form-label">اسم العميل</label>
                    <select name="" class="form-control select2-custom" id="">
                        <option value="">الكل</option>
                        <option value="">محمد</option>
                        <option value="">احمد</option>
                        <option value="">سعيد</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">المندوب المسؤول</label>
                    <select name="" class="form-control select2-custom" id="">
                        <option value="">الكل</option>
                        <option value="">مصطفي</option>
                        <option value="">خليل</option>
                        <option value="">سيد</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">حالة العقد</label>
                    <select name="" class="form-control select2-custom" id="">
                        <option value="">الكل</option>
                        <option value="">ساري</option>
                        <option value="">منتهي</option>
                        <option value="">ملغي</option>
                    </select>
                </div>
                <h3 class="title-h3">الفترة</h3>
                <div class="col-md-4 form-group">
                    <label class="form-label">من تاريخ</label>
                    <input class="datepicker form-control" type="text">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">الى تاريخ</label>
                    <input class="datepicker form-control" type="text">
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
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم العميل</th>
                            <th>رقم العقد</th>
                            <th>تاريخ كتابة العقد</th>
                            <th>المندوب المسؤول</th>
                            <th>حالة العقد</th>
                            <th>معاينة</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ياسين احمد</td>
                            <td>78945612</td>
                            <td>6/13/2022 م - 1443/11/14 هـ</td>
                            <td>احمد مصطفي</td>
                            <td>
                                <span class="cont-status valid-con">ساري</span>
                            </td>
                            <td>
                                <div class="btns-table">
                                    <a href="https://www.w3docs.com/uploads/media/default/0001/01/540cb75550adf33f281f29132dddd14fded85bfc.pdf"
                                        target="_balnk" class="btn btn-primary">
                                        <i class="fa fa-file-pdf-o"></i>
                                        معاينة العقد
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>ياسين احمد</td>
                            <td>78945612</td>
                            <td>6/13/2022 م - 1443/11/14 هـ</td>
                            <td>احمد مصطفي</td>
                            <td>
                                <span class="cont-status expired-con">منتهي</span>
                            </td>
                            <td>
                                <div class="btns-table">
                                    <a href="https://www.w3docs.com/uploads/media/default/0001/01/540cb75550adf33f281f29132dddd14fded85bfc.pdf"
                                        target="_balnk" class="btn btn-primary">
                                        <i class="fa fa-file-pdf-o"></i>
                                        معاينة العقد
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>ياسين احمد</td>
                            <td>78945612</td>
                            <td>6/13/2022 م - 1443/11/14 هـ</td>
                            <td>احمد مصطفي</td>
                            <td>
                                <span class="cont-status canceled-con">ملغي</span>
                            </td>
                            <td>
                                <div class="btns-table">
                                    <a href="https://www.w3docs.com/uploads/media/default/0001/01/540cb75550adf33f281f29132dddd14fded85bfc.pdf"
                                        target="_balnk" class="btn btn-primary">
                                        <i class="fa fa-file-pdf-o"></i>
                                        معاينة العقد
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
