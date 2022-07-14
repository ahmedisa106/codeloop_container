<script src="{{asset('assets/website')}}/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jarallax/jarallax.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/nouislider/nouislider.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/odometer/odometer.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/swiper/swiper.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/wnumb/wNumb.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/wow/wow.js"></script>
<script src="{{asset('assets/website')}}/vendors/isotope/isotope.js"></script>
<script src="{{asset('assets/website')}}/vendors/countdown/countdown.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/vegas/vegas.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jquery-ui/jquery-ui.js"></script>
<script src="{{asset('assets/website')}}/vendors/timepicker/timePicker.js"></script>
<script src="{{asset('assets/website')}}/js/script.js"></script>
<script rel="stylesheet" src="{{asset('assets/website/plugins/toaster/js/toastr.min.js')}}"></script>


<script>
    $(document).ready(function () {
        // preview image
        $('.photo').on('change', function (e) {
            let file = e.target.files[0],
                url = URL.createObjectURL(file),
                preview = $(this).parent().parent().find(('.pic-prev'))
            preview.attr('src', url);
        });
        // end preview image
    });
</script>


@stack('js')
