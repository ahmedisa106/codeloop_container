
<div class="btns-table">
@if(auth()->user()->hasPermission('update_'.$model))
    <a href="{{route($model.'.edit',$raw->id)}}" class="btn btn-primary btn-icon show_modal"> <i class="fa fa-edit"></i> تعديل</a>
@endif
@if(auth()->user()->hasPermission('delete_'.$model))
    <a href="{{route($model.'.destroy',$raw->id)}}" class="btn btn-danger btn-icon delete_btn"> <i class="fa fa-close"></i> حذف</a>
@endif
</div>

