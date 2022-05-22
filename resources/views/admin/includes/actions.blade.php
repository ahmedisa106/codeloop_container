@if($model != 'contact-us')
    <a href="{{route($model.'.edit',$raw->id)}}" class="btn btn-primary show_modal"> <i class="fa fa-edit"></i> </a>
@else
    <a href="{{route($model.'.edit',$raw->id)}}" class="btn btn-info show_modal"> <i class="fa fa-eye"></i> </a>

@endif
<a href="{{route($model.'.destroy',$raw->id)}}" class="btn btn-danger delete_btn"> <i class="fa fa-close"></i> </a>


