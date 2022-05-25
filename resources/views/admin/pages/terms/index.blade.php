<div class="card">
    <div class="card-header">
        <h3>{{$data['page_title']}}</h3>
        <div class="btns-header">

        </div>
    </div>
    <div class="card-body">
        <form class="row form" method="post" action="{{route('terms.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="col-md-12 form-group">
                <label class="form-label">المحتوي</label>
                <textarea name="body" class="editor" id="" cols="203" rows="10">{!! isset($term)?$term->body:'' !!}</textarea>
            </div>


            <div class="col-md-12">
                <div class="seo-div">
                    <h4>بيانات السيو (SEO)</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label">عنوان الميتا</label>
                            <input value="{{isset($term)?$term->meta_title:''}}" name="meta_title" class="form-control"
                                   type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="form-label">وصف الميتا</label>
                            <input value="{{isset($term)?$term->meta_description:''}}" name="meta_description" class="form-control"
                                   type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="form-label">الكلمات الدلالية</label>
                            <input value="{{isset($term)?$term->meta_keywords:''}}" name="meta_keywords" class="form-control"
                                   type="text" placeholder="">
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                <button class="btn btn-primary btn-air-primary btn-icon" type="submit">
                    <i class="fa fa-save"></i>
                    حفظ
                </button>
                <button class="btn btn-danger exsit_modal btn-air-danger btn-icon"
                        type="button" data-bs-dismiss="modal">
                    <i class="fa fa-times"></i>
                    خروج
                </button>
            </div>
        </form>
    </div>

</div>
