<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="pixelstrap">
    <link rel="shortcut icon" href="{{asset('assets/dashboard')}}/images/logo-icon.svg" type="image/x-icon">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title> @stack('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    @include('admin.includes.css')
</head>

<body>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="loader"></div>
</div>
<div class="tap-top"><i class="fa fa-chevron-up"></i></div>

<div class="page-wrapper compact-wrapper" id="pageWrapper">
@include('company.includes.header')
<!-- Page Body Start-->
    <div class="page-body-wrapper">
    @include('company.includes.aside')
    <!-- Page Sidebar Ends-->
        <div class="page-body">
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('admin.includes.footer')
    </div>
</div>
@include('admin.includes.js')
<div class="modal fade modal-custom" id="ModalCenter" data-bs-backdrop="static">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

            <div class="modal-body">

            </div>

        </div>
    </div>
</div>


<div class="modal fade modal-custom modal-above" id="subModal" data-bs-backdrop="static">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

            <div class="modal-body">

            </div>

        </div>
    </div>
</div>


</body>

</html>
