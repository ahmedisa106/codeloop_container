<script>
    // open the model
    $(document).on('click', '.show_modal', function (e) {
        e.preventDefault();
        $('#ModalCenter .modal-body').html('')
        let url = $(this).attr('href');
        $.ajax({
            type: 'get',
            url: url,
            success: function (res) {
                $('#ModalCenter').modal('show');
                $('#ModalCenter .modal-body').html(res);
            }
        })
    });
    //end open the model

    // submit form
    $(document).on('submit', '.form', function (e) {
        e.preventDefault();

        let url = $(this).attr('action'),
            data = new FormData($(this)[0]);

        $.ajax({
            url: url,
            type: "post",
            contentType: false,
            cache: false,
            processData: false,
            data: data,
            beforeSend: function () {
                $('.fa-save').removeClass('fa-save').addClass('fa-spinner fa-spin')
            },
            success: function (response) {
                if (!response.self) {
                    $('form').trigger('reset');
                }
                $('#ModalCenter').modal('hide');
                $('.table.datatable').DataTable().ajax.reload();

                $.Notify({
                    caption: 'تهانينا',
                    content: response.data,
                    type: 'success',
                    timeout: 3500,
                })
            },
            error: function (xhr) {

                xhr.responseJSON.error ?
                    $.Notify({
                        caption: 'خطأ',
                        content: xhr.responseJSON.error,
                        type: 'alert',
                        timeout: 3500,
                    })
                    :
                    $.each(xhr.responseJSON.errors, function (key, value) {
                        $.Notify({
                            caption: 'خطأ',
                            content: value,
                            type: 'alert',
                            timeout: 3500,
                        })
                    });
            },
            complete: function () {
                $('.fa-spinner').addClass('fa-save').removeClass('fa-spinner fa-spin');
            },
        })
    })
    //end  submit form

    // when ajax complete
    $(document).ajaxComplete(function () {
        // preview image
        $('#photo').on('change', function (e) {
            let file = e.target.files[0],
                url = URL.createObjectURL(file);
            $('#pic-prev').attr('src', url);
        });
        // end preview image


        $("textarea.editor").each(function () {
            var txt = $(this).attr('name');
            CKEDITOR.replace(txt, {
                language: 'ar'
            });
        });

    });
    //end  when ajax complete

    //  delete single item
    $(document).on('click', '.delete_btn', function (e) {
        e.preventDefault();
        let url = $(this).attr('href');
        Swal.fire({
            title: 'هل تريد الاستمرار؟',
            icon: 'question',
            iconHtml: '؟',
            confirmButtonText: 'نعم',
            cancelButtonText: 'لا',
            showCancelButton: true,
            showCloseButton: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'delete',
                    url: url,
                    data: {
                        '_token': "{{csrf_token()}}"
                    },
                    success: function (response) {
                        $.Notify({
                            caption: 'نجاح',
                            content: response.data,
                            type: 'success',
                            timeout: 3500,
                        });
                        $('.table.datatable').DataTable().ajax.reload();
                    }
                })

            }
        });
    });
    //  end delete single item

    // check all items
    $(document).on('click', '#check_all', function () {
        if ($(this).is(':checked')) {
            $('.check_item').prop('checked', true);
            $('.check_item:checked').length > 0 ? $('#delete_all').removeClass('d-none') : '';
        } else {
            $('#delete_all').addClass('d-none')
            $('.check_item').prop('checked', false);
        }
    });
    // end check all items

    // check single item
    $(document).on('click', '.check_item', function () {
        if ($(this).is(':checked')) {
            $('.check_item:checked').length == $('.check_item').length ? $('#check_all').prop('checked', true) : '';
            $('#delete_all').removeClass('d-none');
        } else {
            $('.check_item:checked').length > 0 ? $('#delete_all').removeClass('d-none') : $('#delete_all').addClass('d-none');
            $('#check_all').prop('checked', false);
        }

    });
    //end  check single item

    // click on delete all
    $(document).on('click', '#delete_all', function (e) {
        e.preventDefault();

        let form = $(this).parents('.card').find('#delete_all_form');
        let url = $('#delete_all_form').attr('action');
        let data = form.serialize();

        console.log(form)
        Swal.fire({
            title: 'هل تريد الاستمرار؟',
            icon: 'question',
            iconHtml: '؟',
            confirmButtonText: 'نعم',
            cancelButtonText: 'لا',
            showCancelButton: true,
            showCloseButton: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: url,
                    data: {
                        '_token': "{{csrf_token()}}",
                        'ids': data
                    },
                    success: function (response) {
                        $.Notify({
                            caption: 'نجاح',
                            content: response.data,
                            type: 'success',
                            timeout: 3500,
                        });
                        $('.table.datatable').DataTable().ajax.reload();
                    }
                })

            }
        });
    })
    //end  click on delete all

</script>
