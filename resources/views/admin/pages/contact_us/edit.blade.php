<div class="card">
    <div class="card-body">
        <form class=" form" method="post" action="{{route('blogs.update',$contact->id)}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{$contact->id}}">

            <ul class="message-div">
                <li>
                    <p>إسم الراسل</p>
                    <span>{{isset($contact) ? $contact->name:''}}</span>
                </li>
                <li>
                    <p>البريد الالكتروني</p>
                    <span>{{isset($contact) ? $contact->email:''}}</span>
                </li>
                <li>
                    <p>الهاتف</p>
                    <span>{{isset($contact) ? $contact->phone:''}}</span>
                </li>
                <li class="message">
                    <p>الرسالة</p>
                    <span>{!! isset($contact)?$contact->body:'' !!}</span>
                </li>
            </ul>
<!-- 
            <div class="col-md-12 form-group">
                <label class="form-label">إسم الراسل</label>
                <input readonly value="{{isset($contact) ? $contact->name:''}}" name="title" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-12 form-group">
                <label class="form-label">البريد الالكتروني</label>
                <input readonly value="{{isset($contact) ? $contact->email:''}}" name="title" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-12 form-group">
                <label class="form-label">الهاتف</label>
                <input readonly value="{{isset($contact) ? $contact->phone:''}}" name="title" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-12 form-group">
                <label class="form-label">الرسالة</label>
                <textarea name="description" readonly class="editor" id="" cols="203" rows="10">{!! isset($contact)?$contact->body:'' !!}</textarea>
            </div> -->

            <div class="modal-footer">

                <button class="btn btn-danger exsit_modal btn-air-danger btn-icon"
                        type="button" data-bs-dismiss="modal">
                    <i class="fa fa-times"></i>
                    خروج
                </button>
            </div>
        </form>
    </div>

</div>
