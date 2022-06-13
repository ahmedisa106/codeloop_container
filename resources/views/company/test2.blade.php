@extends('company.layouts.master')
@section('content')


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>ايجار حاوية</h3>
        </div>
        <div class="card-body">
            <form class="row form" method="post" action="" enctype="">
                <div class="col-md-4 form-group">
                    <label class="form-label">نوع التعاقد</label>
                    <select name="" class="form-control select2-custom" id="">
                        <option value="">نقدي</option>
                        <option value="">تعاقد</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">التصنيفات</label>
                    <select name="" class="form-control select2-custom" id="">
                        <option value="">انقاض</option>
                        <option value="">نفايات</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">العميل</label>
                    <select name="" class="form-control select2-custom" id="">
                        <option value="">تست</option>
                        <option value="">تست</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">عنوان العميل</label>
                    <select name="" class="form-control select2-custom" id="">
                        <option value="">تست</option>
                        <option value="">تست</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">رقم العقد</label>
                    <select name="" class="form-control select2-custom" id="">
                        <option value="">تست</option>
                        <option value="">تست</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">حجم التصنيف</label>
                    <select name="" class="form-control select2-custom" id="">
                        <option value="">تست</option>
                        <option value="">تست</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">رقم الحاوية</label>
                    <select name="" class="form-control select2-custom" id="">
                        <option value="">تست</option>
                        <option value="">تست</option>
                    </select>
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label">سعر التفريغة</label>
                    <input class="form-control" name="" type="text" placeholder="">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">عدد التفريغات</label>
                    <input class="form-control" name="" type="number" placeholder="">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">الخصم</label>
                    <input class="form-control" name="" type="number" placeholder="">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">الاجمالي بعد الخصم</label>
                    <input class="form-control" name="" type="number" placeholder="" disabled>
                </div>

                <h3 class="title-h3">مدة الايجار</h3>
                <div class="col-md-4 form-group">
                    <label class="form-label">من تاريخ</label>
                    <input class="datepicker-here form-control" type="text">
                </div>
                <div class="col-md-4 form-group">
                    <label class="form-label">الى تاريخ</label>
                    <input class="datepicker-here form-control" type="text">
                </div>
                <div class="line"></div>

                <div class="col-md-4 form-group">
                    <label class="form-label">الحالة</label>
                    <select name="" class="form-control select2-custom" id="">
                        <option value="">في انتظار سائق متاح</option>
                        <option value="">جاري التوصيل</option>
                        <option value="">بدأ فترة الايجار</option>
                        <option value="">انتهاء فترة الايجار</option>
                    </select>
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
