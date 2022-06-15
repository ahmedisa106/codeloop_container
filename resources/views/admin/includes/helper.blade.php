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


    // open the model
    $(document).on('click', '.show_sub_modal', function (e) {
        e.preventDefault();
        $('#subModal .modal-body').html('')
        let url = $(this).attr('href');
        $.ajax({
            type: 'get',
            url: url,

            success: function (res) {
                $('#subModal').modal('show');
                $('#subModal .modal-body').html(res);

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
                $('#subModal').is(':visible') ? $('#subModal').modal('hide') : $('#ModalCenter').modal('hide');

                $('.table.datatable').DataTable().draw();

                $.Notify({
                    caption: 'تهانينا',
                    content: response.data,
                    type: 'success',
                    timeout: 3500,
                });

                switch (response.model) {
                    case "customers":
                        getCustomers();
                        break;
                    case "categories":
                        getCategories();
                }


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
        $('.photo').on('change', function (e) {
            let file = e.target.files[0],
                url = URL.createObjectURL(file),
                preview = $(this).parent().parent().find(('.pic-prev'));

            preview.attr('src', url);
        });
        // end preview image

        $(".select2-custom").select2({
            dir: "rtl"
        });
        $("textarea.editor").each(function () {
            var txt = $(this).attr('name');
            CKEDITOR.replace(txt, {
                language: 'ar'
            });
        });

        // Single Date Picker
        $('.datepicker-here').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            parentEl: ".modal .modal-body",
            locale: {
                format: 'YYYY-MM-DD',
            },
            autoUpdateInput: false,
        });

        $('.datepicker').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            locale: {
                format: 'YYYY-MM-DD',
            },
            autoUpdateInput: false,
        });
        $('.datepicker-here').on('apply.daterangepicker', function (ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD'));
        });


    });
    //end  when ajax complete

    //  delete single item
    $(document).on('click', '.delete_btn', function (e) {
        e.preventDefault();
        let url = $(this).attr('href');
        Swal.fire({
            title: 'هل تريد الاستمرار؟  سوف يتم حذف جميع العناصر المتعلقه بهذا العنصر ',
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
                        $('.table.datatable').DataTable().draw();
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


        Swal.fire({
            title: 'هل تريد الاستمرار؟  سوف يتم حذف جميع العناصر المتعلقه بهذا العنصر',
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
                        $('.table.datatable').DataTable().draw();
                        $('#check_all').prop('checked', false);
                        $('#delete_all').addClass('d-none');
                    }
                })

            }
        });
    })
    //end  click on delete all

    // change package
    $(document).on('change', '.package_id', function () {
        let package_id = $(this).val();
        getPackageData(package_id);
    });

    $(document).on('input', '.discount', function () {
        let package_price = $('.package_price').val();
        $('.price_after_discount').val(+package_price - +$(this).val());
    })

    function getPackageData(package_id) {
        $.ajax({
            type: 'get',
            url: "{{route('packages.getPackage')}}",
            data: {
                package_id: package_id
            },
            beforeSend: function () {
                $('.loader-div').removeClass('d-none');
                $('.package_details').toggleClass('d-none');

            },
            success: function (res) {
                $('.package_price').val(res.data.price);
                let date = new Date();
                let year = date.getFullYear();
                let month = date.getMonth() + 1 + +res.data.period;
                let day = date.getDate();
                $('.package_finish_at').val(year + '-' + (month < 9 ? '0' + month : month) + '-' + (day < 9 ? '0' + day : day));
                $('.price_after_discount').val(res.data.price);
            },
            complete: function () {
                $('.loader-div').addClass('d-none');
                $('.package_details').removeClass('d-none');
            }
        })
    }// end  change package

    // change company subscription status
    $(document).on('change', '.pending_company', function () {
        let id = $(this).data('id');
        let package_id = $(this).data('package_id');
        $.ajax({
            type: 'post',
            url: '{{route('subscriptions.changePending')}}',
            data: {
                '_token': '{{csrf_token()}}',
                'id': id,
                'package_id': package_id
            },
            success: function (response) {
                $.Notify({
                    caption: 'نجاح',
                    content: response.data,
                    type: 'success',
                    timeout: 3500,
                });

                $('.table.datatable').DataTable().draw();
            }
        })

    });
    //end  change company subscription status


    // change status

    $(document).on('change', '.change_status', function () {
        let status = $(this).val(),
            url = $(this).data('link');
        status = status === 'active' ? 'inactive' : 'active';

        $.ajax({
            type: 'post',
            url: url,
            data: {
                '_token': '{{csrf_token()}}',
                status: status,
            },
            success: function (response) {
                $.Notify({
                    caption: 'نجاح',
                    content: response.data,
                    type: 'success',
                    timeout: 3500,
                });
                $('.table.datatable').DataTable().ajax.reload();
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
        });


    });

    // end change status
    function getCustomers() {
        let response = [];
        $.ajax({
            type: 'get',
            url: '{{route('customers.getCustomers')}}',
            success: function (res) {
                let html = `<option selected disabled>إختر عميل</option>`;
                $.each(res.data, function (key, value) {
                    html += `<option  value="${value.id}">${value.name}</option>`
                    $('select[name="customer_id"]').html(html);
                })
                response.push(res.data)
            }

        })
        return response

    }

    function getCategories() {
        let response = [];
        $.ajax({
            type: 'get',
            url: '{{route('categories.getCategories')}}',
            success: function (res) {
                let html = `<option selected disabled>إختر تصنيف</option>`;
                $.each(res.data, function (key, value) {
                    html += `<option  value="${value.id}">${value.name}</option>`
                    $('select[name="category_id"]').html(html);
                })
                response.push(res.data)
            }

        })
        return response

    }

</script>
