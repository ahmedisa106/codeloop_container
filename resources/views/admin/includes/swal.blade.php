<script>
    function notifyOnErrorInput(input) {
        var message = input.data('validatehint');
        // type =>  alert , success , warning
        $.Notify({
            caption: 'خطأ',
            content: message,
            type: 'alert',
            timeout: 3500,

        });

    }

    @if(session('errors'))
    $.Notify({
        caption: 'خطأ',
        content: '{{session('errors')->first()}}',
        type: 'alert',
        timeout: 3500,

    })
    @endif

    @if(session('error'))
    $.Notify({
        caption: 'خطأ',
        content: '{{session('error')}}',
        type: 'alert',
        timeout: 3500,
    })
    @endif

    @if(session('success'))
    $.Notify({
        caption: 'تهانينا',
        content: '{{session('success')}}',
        type: 'success',
        timeout: 3500,
    })
    @endif


</script>
