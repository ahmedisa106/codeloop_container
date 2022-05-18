<script>
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

    $(document).ajaxComplete(function () {

        // preview image
        $('#photo').on('change', function (e) {
            let file = e.target.files[0],
                url = URL.createObjectURL(file);
            $('#pic-prev').attr('src', url);
        });
        // end preview image
    })

    $(document).on('click', '.delete_btn', function () {
        alert('asd')
    })

</script>
