@if(auth()->user()->hasPermission('update_'.$model))
    <a href="{{route($model.'.edit',$raw->id)}}" class="btn btn-primary show_modal"> <i class="fa fa-edit"></i> </a>
@endif
@if(auth()->user()->hasPermission('delete_'.$model))
    <a href="{{route($model.'.destroy',$raw->id)}}" class="btn btn-danger delete_btn"> <i class="fa fa-close"></i> </a>
@endif

