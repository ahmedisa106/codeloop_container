<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="pixelstrap">
    <link rel="shortcut icon" href="{{asset('assets/dashboard')}}/assets/images/logo-icon.svg" type="image/x-icon">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard')}}/assets/css/vendors/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard')}}/assets/css/vendors/themify.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard')}}/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard')}}/assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard')}}/assets/css/vendors/datatable-extension.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard')}}/assets/css/vendors/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard')}}/assets/css/vendors/select2.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard')}}/assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard')}}/assets/css/style-rtl.css">
</head>

<body>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="loader"></div>
</div>
<div class="tap-top"><i class="fa fa-chevron-up"></i></div>

<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <div class="header-logo-wrapper col-auto p-0">

                <div class="toggle-sidebar">
                    <div class="status_toggle sidebar-toggle d-flex">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M21.0003 6.6738C21.0003 8.7024 19.3551 10.3476 17.3265 10.3476C15.2979 10.3476 13.6536 8.7024 13.6536 6.6738C13.6536 4.6452 15.2979 3 17.3265 3C19.3551 3 21.0003 4.6452 21.0003 6.6738Z"
                                          stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10.3467 6.6738C10.3467 8.7024 8.7024 10.3476 6.6729 10.3476C4.6452 10.3476 3 8.7024 3 6.6738C3 4.6452 4.6452 3 6.6729 3C8.7024 3 10.3467 4.6452 10.3467 6.6738Z"
                                          stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M21.0003 17.2619C21.0003 19.2905 19.3551 20.9348 17.3265 20.9348C15.2979 20.9348 13.6536 19.2905 13.6536 17.2619C13.6536 15.2333 15.2979 13.5881 17.3265 13.5881C19.3551 13.5881 21.0003 15.2333 21.0003 17.2619Z"
                                          stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10.3467 17.2619C10.3467 19.2905 8.7024 20.9348 6.6729 20.9348C4.6452 20.9348 3 19.2905 3 17.2619C3 15.2333 4.6452 13.5881 6.6729 13.5881C8.7024 13.5881 10.3467 15.2333 10.3467 17.2619Z"
                                          stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
                <ul class="nav-menus">

                    <li class="onhover-dropdown">
                        <div class="notification-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11.9961 2.51416C7.56185 2.51416 5.63519 6.5294 5.63519 9.18368C5.63519 11.1675 5.92281 10.5837 4.82471 13.0037C3.48376 16.4523 8.87614 17.8618 11.9961 17.8618C15.1152 17.8618 20.5076 16.4523 19.1676 13.0037C18.0695 10.5837 18.3571 11.1675 18.3571 9.18368C18.3571 6.5294 16.4295 2.51416 11.9961 2.51416Z"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.306 20.5122C13.0117 21.9579 10.9927 21.9751 9.68604 20.5122" stroke="#130F26"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                            <span class="badge rounded-pill badge-warning">4 </span>
                        </div>
                        <div class="onhover-show-div notification-dropdown">
                            <div class="dropdown-title">
                                <h3>الاشعارات</h3><a class="f-right" href="cart.html"> <i class="fa fa-bell"> </i></a>
                            </div>
                            <ul class="custom-scrollbar">
                                <li>
                                    <div class="media">
                                        <div class="notification-img bg-light-primary"><img src="{{asset('assets/dashboard')}}/assets/images/man.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h5><a class="f-14 m-0" href="user-profile.html">Allie Grater</a></h5>
                                            <p>Lorem ipsum dolor sit amet...</p><span>10:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="notification-img bg-light-secondary"><img src="{{asset('assets/dashboard')}}/assets/images/teacher.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h5><a class="f-14 m-0" href="user-profile.html">Olive Yew</a></h5>
                                            <p>Lorem ipsum dolor sit amet...</p><span>09:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="notification-img bg-light-info"><img src="{{asset('assets/dashboard')}}/assets/images/teenager.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h5><a class="f-14 m-0" href="user-profile.html">Peg Legge</a></h5>
                                            <p>Lorem ipsum dolor sit amet...</p><span>07:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="notification-img bg-light-secondary"><img src="{{asset('assets/dashboard')}}/assets/images/teacher.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h5><a class="f-14 m-0" href="user-profile.html">Olive Yew</a></h5>
                                            <p>Lorem ipsum dolor sit amet...</p><span>09:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="notification-img bg-light-info"><img src="{{asset('assets/dashboard')}}/assets/images/teenager.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h5><a class="f-14 m-0" href="user-profile.html">Peg Legge</a></h5>
                                            <p>Lorem ipsum dolor sit amet...</p><span>07:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-0"><a class="view-all" href="#">عرض الكل</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path d="M2.99609 8.71995C3.56609 5.23995 5.28609 3.51995 8.76609 2.94995" stroke="#130F26"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M8.76616 20.99C5.28616 20.41 3.56616 18.7 2.99616 15.22L2.99516 15.224C2.87416 14.504 2.80516 13.694 2.78516 12.804"
                                            stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M21.2446 12.804C21.2246 13.694 21.1546 14.504 21.0346 15.224L21.0366 15.22C20.4656 18.7 18.7456 20.41 15.2656 20.99"
                                            stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15.2661 2.94995C18.7461 3.51995 20.4661 5.23995 21.0361 8.71995" stroke="#130F26"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                        </a></li>
                    <li class="profile-nav onhover-dropdown">
                        <div class="media profile-media">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M9.55851 21.4562C5.88651 21.4562 2.74951 20.9012 2.74951 18.6772C2.74951 16.4532 5.86651 14.4492 9.55851 14.4492C13.2305 14.4492 16.3665 16.4342 16.3665 18.6572C16.3665 20.8802 13.2505 21.4562 9.55851 21.4562Z"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M9.55849 11.2776C11.9685 11.2776 13.9225 9.32356 13.9225 6.91356C13.9225 4.50356 11.9685 2.54956 9.55849 2.54956C7.14849 2.54956 5.19449 4.50356 5.19449 6.91356C5.18549 9.31556 7.12649 11.2696 9.52749 11.2776H9.55849Z"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M16.8013 10.0789C18.2043 9.70388 19.2383 8.42488 19.2383 6.90288C19.2393 5.31488 18.1123 3.98888 16.6143 3.68188"
                                            stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M17.4608 13.6536C19.4488 13.6536 21.1468 15.0016 21.1468 16.2046C21.1468 16.9136 20.5618 17.6416 19.6718 17.8506"
                                            stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="profile.html"><i class="fa fa-user"></i><span>الملف الشخصي</span></a></li>
                            <li><a href="login.html"><i class="fa fa-sign-out"> </i><span>تسجيل خروج</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <div class="sidebar-wrapper">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{asset('assets/dashboard')}}/assets/images/logo.svg"
                                                                alt=""></a>
                <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            </div>

            <nav class="sidebar-main">
                <div class="left-arrow" id="left-arrow"><i class="fa fa-arrow-left"></i></div>
                <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar">

                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="index.html">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/home.png" alt="">
                                <span>الرئيسية</span></a>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/safe.png" alt="">
                                <span>الخزن</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="الخزن.html">الخزن</a></li>
                                <li><a href="التحويل بين الخزن.html">التحويل بين الخزن</a></li>
                                <li><a href="تقرير حركة خزنة.html">تقرير حركة خزنة</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/tax.png" alt="">
                                <span>الضرائب</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#">ضرائب مبيعات القدي</a></li>
                                <li><a href="#">ضرائب مبيعات التسديدات</a></li>
                                <li><a href="#">ضرائب مرتجع القدي</a></li>
                                <li><a href="#">ضرائب مرتجع التسديدات</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/money.png" alt="">
                                <span>الرواتب والسلف</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#">تسجيل سلف الموظف</a></li>
                                <li><a href="#">دفع الرواتب</a></li>
                                <li><a href="#">تقرير سلف موظف</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/container.png" alt="">
                                <span>الحاويات</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#">الحاويات</a></li>
                                <li><a href="#">البحث عن حاوية</a></li>
                                <li><a href="#">ايجار حاوية</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/truck.png" alt="">
                                <span>الشاحنات</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#">الشاحنات</a></li>
                                <li><a href="#">تغيير زيت شاحنة</a></li>
                                <li><a href="#">تقرير غيار زيت الشاحنات</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/contract.png" alt="">
                                <span>التعاقد</span></a>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/deadline.png" alt="">
                                <span>المواعيد</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#">المواعيد</a></li>
                                <li><a href="#">الحجوزات</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/salary.png" alt="">
                                <span>المصروفات</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="المصروفات.html">المصروفات</a></li>
                                <li><a href="مصروفات عامة.html">تسجيل مصروفات عامة</a></li>
                                <li><a href="مصروفات سيارة.html">تسجيل مصروفات سيارة</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/bill.png" alt="">
                                <span>الايصالات</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#">ايصال تفريغ حاوية</a></li>
                                <li><a href="#">ايصال سداد عميل</a></li>
                                <li><a href="#">ايصال ايرادات آخرى</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/report.png" alt="">
                                <span>التقارير</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#">تقرير عام</a></li>
                                <li><a href="#">تقرير تسديدات</a></li>
                                <li><a href="#">تقرير كشف حساب عميل</a></li>
                                <li><a href="#">تقرير مبيعات</a></li>
                                <li><a href="#">تقرير عقود</a></li>
                                <li><a href="#">تقرير تفريغ</a></li>
                                <li><a href="#">تقرير التحويلات والبدلات</a></li>
                                <li><a href="#">تقرير نشاط العملاء النقدي</a></li>
                                <li><a href="#">تقرير الايرادات الآخرى</a></li>
                                <li><a href="#">تقرير مصروفات عامة</a></li>
                                <li><a href="#">تقرير مصروفات سيارة</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/return.png" alt="">
                                <span>تقارير المرتجعات</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="#">تقرير مرتجع تسديدات</a></li>
                                <li><a href="#">تقرير مرتجع الايجار النقدي</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                                <img src="{{asset('assets/dashboard')}}/assets/images/icons/setting.png" alt="">
                                <span>الاعدادات</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="الفروع.html">الفروع</a></li>
                                <li><a href="المستخدمين.html">المستخدمين</a></li>
                                <li><a href="الموظفين.html">الموظفين</a></li>
                                <li><a href="العملاء.html">العملاء</a></li>
                                <li><a href="القيم المضافة.html">القيم المضافة</a></li>
                                <li><a href="اعدادات المؤسسة.html">اعدادات المؤسسة</a></li>
                                <li><a href="التصنيفات.html">التصنيفات</a></li>
                                <li><a href="احجام التصنيفات.html">احجام التصنيفات</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="road">
                        <div class="buildings">
                            <img src="{{asset('assets/dashboard')}}/assets/images/tree.svg" alt="">
                            <img src="{{asset('assets/dashboard')}}/assets/images/house.svg" alt="">
                            <img src="{{asset('assets/dashboard')}}/assets/images/tree.svg" alt="">
                        </div>
                        <img class="image truck-img" src="{{asset('assets/dashboard')}}/assets/images/truck.png" alt="">
                        <img class="image box-img" src="{{asset('assets/dashboard')}}/assets/images/box.png" alt="">
                        <img class="image box-img box-img2" src="{{asset('assets/dashboard')}}/assets/images/box.png" alt="">
                    </div>
                </div>
                <div class="right-arrow" id="right-arrow"><i class="fa fa-arrow-left"></i></div>
            </nav>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card bg-1">
                            <div class="card-body">
                                <div class="media static-widget">
                                    <div class="media-body">
                                        <h6 class="font-roboto">الخزن</h6>
                                        <h4 class="mb-0 counter">6659</h4>
                                    </div>
                                    <svg class="fill-secondary" width="48" height="48" viewBox="0 0 48 48" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.5938 14.1562V17.2278C20.9604 17.8102 19.7812 19.3566 19.7812 21.1875C19.7812 23.5138 21.6737 25.4062 24 25.4062C24.7759 25.4062 25.4062 26.0366 25.4062 26.8125C25.4062 27.5884 24.7759 28.2188 24 28.2188C23.2241 28.2188 22.5938 27.5884 22.5938 26.8125H19.7812C19.7812 28.6434 20.9604 30.1898 22.5938 30.7722V33.8438H25.4062V30.7722C27.0396 30.1898 28.2188 28.6434 28.2188 26.8125C28.2188 24.4862 26.3263 22.5938 24 22.5938C23.2241 22.5938 22.5938 21.9634 22.5938 21.1875C22.5938 20.4116 23.2241 19.7812 24 19.7812C24.7759 19.7812 25.4062 20.4116 25.4062 21.1875H28.2188C28.2188 19.3566 27.0396 17.8102 25.4062 17.2278V14.1562H22.5938Z">
                                        </path>
                                        <path
                                            d="M25.4062 0V11.4859C31.2498 12.1433 35.8642 16.7579 36.5232 22.5938H48C47.2954 10.5189 37.4829 0.704531 25.4062 0Z">
                                        </path>
                                        <path
                                            d="M14.1556 31.8558C12.4237 29.6903 11.3438 26.9823 11.3438 24C11.3438 17.5025 16.283 12.1958 22.5938 11.4859V0C10.0492 0.731813 0 11.2718 0 24C0 30.0952 2.39381 35.6398 6.14897 39.8624L14.1556 31.8558Z">
                                        </path>
                                        <path
                                            d="M47.9977 25.4062H36.5143C35.8044 31.717 30.4977 36.6562 24.0002 36.6562C21.0179 36.6562 18.3099 35.5763 16.1444 33.8444L8.13779 41.851C12.3604 45.6062 17.905 48 24.0002 48C36.7284 48 47.2659 37.9508 47.9977 25.4062Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card bg-2">
                            <div class="card-body">
                                <div class="media static-widget">
                                    <div class="media-body">
                                        <h6 class="font-roboto">الحاويات</h6>
                                        <h4 class="mb-0 counter">9856</h4>
                                    </div>
                                    <svg class="fill-success" width="45" height="39" viewBox="0 0 45 39" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.92047 8.49509C5.81037 8.42629 5.81748 8.25971 5.93378 8.20177C7.49907 7.41686 9.01464 6.65821 10.5302 5.89775C14.4012 3.95495 18.2696 2.00762 22.1478 0.0792996C22.3387 -0.0157583 22.6468 -0.029338 22.8359 0.060288C28.2402 2.64315 33.6357 5.24502 39.033 7.84327C39.0339 7.84327 39.0339 7.84417 39.0348 7.84417C39.152 7.90121 39.1582 8.06869 39.0472 8.1375C38.9939 8.17009 38.9433 8.20087 38.8918 8.22984C33.5398 11.2228 28.187 14.2121 22.8385 17.2115C22.5793 17.3572 22.3839 17.3762 22.1131 17.2296C16.7851 14.3507 11.4518 11.4826 6.12023 8.61188C6.05453 8.57748 5.98972 8.53855 5.92047 8.49509Z">
                                        </path>
                                        <path
                                            d="M21.1347 23.3676V38.8321C21.1347 38.958 21.0042 39.0386 20.895 38.9806C20.4182 38.7271 19.9734 38.4918 19.5295 38.2528C14.498 35.5441 9.46833 32.8317 4.43154 30.1339C4.12612 29.97 4.02046 29.7944 4.02224 29.4422C4.03822 26.8322 4.03023 24.2222 4.02934 21.6122C4.02934 21.4719 4.02934 21.3325 4.02934 21.1659C4.02934 21.0428 4.15542 20.9622 4.26373 21.0147C4.35252 21.0581 4.43065 21.0962 4.50434 21.1396C8.18539 23.2888 11.8664 25.438 15.5457 27.5909C16.5081 28.154 17.0622 28.0453 17.7627 27.1464C18.7748 25.8472 19.7896 24.5508 20.8045 23.2535C20.8053 23.2526 20.8062 23.2517 20.8071 23.2499C20.9172 23.1132 21.1347 23.192 21.1347 23.3676Z">
                                        </path>
                                        <path
                                            d="M23.83 23.3784C23.83 23.2019 24.0484 23.1241 24.1567 23.2626C25.2168 24.6178 26.2192 25.9016 27.2233 27.1835C27.8928 28.039 28.4504 28.1494 29.3719 27.6117C33.0521 25.4643 36.7323 23.316 40.4133 21.1686C40.4914 21.1233 40.5713 21.0799 40.6592 21.0337C40.7613 20.9803 40.8856 21.0473 40.8972 21.164C40.9025 21.2184 40.9069 21.2691 40.9069 21.3189C40.9087 23.928 40.9052 26.5371 40.9132 29.1462C40.914 29.4006 40.8421 29.5518 40.6131 29.6794C35.1057 32.7539 29.6037 35.8365 24.099 38.9163C24.0892 38.9218 24.0803 38.9263 24.0706 38.9317C23.9605 38.9879 23.8309 38.9082 23.8309 38.7833L23.83 23.3784Z">
                                        </path>
                                        <path
                                            d="M28.4752 24.454C27.2908 22.9385 26.118 21.4384 24.9203 19.9066C24.6983 19.6232 24.7809 19.2031 25.0925 19.0293L41.3092 9.95809C41.5746 9.80962 41.9076 9.89743 42.0692 10.1582C43.0147 11.6791 43.9541 13.1891 44.9103 14.7264C45.0852 15.0079 44.9946 15.3818 44.7114 15.5475C39.5414 18.5649 34.3875 21.5742 29.2086 24.5979C28.9627 24.74 28.651 24.6794 28.4752 24.454Z">
                                        </path>
                                        <path
                                            d="M20.0132 19.931C18.819 21.4592 17.6506 22.9539 16.4804 24.4512C16.3037 24.6767 15.9921 24.7373 15.747 24.5943C10.586 21.5814 5.45504 18.5857 0.288619 15.5701C6.65486e-05 15.4017 -0.087831 15.0188 0.0968427 14.7372C1.02554 13.3204 1.94269 11.9208 2.86872 10.5085C3.03209 10.2596 3.35349 10.1763 3.61363 10.3157C9.018 13.2254 14.3975 16.1215 19.833 19.0483C20.1508 19.2194 20.2378 19.644 20.0132 19.931Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card bg-3">
                            <div class="card-body">
                                <div class="media static-widget">
                                    <div class="media-body">
                                        <h6 class="font-roboto">الشاحنات</h6>
                                        <h4 class="mb-0 counter">893</h4>
                                    </div>
                                    <svg class="fill-primary" width="44" height="46" viewBox="0 0 44 46"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.73709 35.2337C6.17884 31.58 4.00316 26.8452 3.49802 21.7377C1.60687 24.237 0.581465 27.3024 0.586192 30.5195C0.589372 32.612 1.03986 34.692 1.89348 36.5729L0.1333 41.9282C-0.169286 42.8488 0.0517454 43.8484 0.7102 44.5369C1.17358 45.0213 1.78451 45.2794 2.4128 45.2794C2.67714 45.2794 2.94458 45.2337 3.2054 45.14L8.32806 43.2997C10.1272 44.1922 12.1167 44.6631 14.1182 44.6665C17.2557 44.6709 20.2418 43.558 22.657 41.5068C17.8005 41.0474 13.2702 38.8615 9.73709 35.2337Z">
                                        </path>
                                        <path
                                            d="M43.8418 35.7427L41.2863 27.9674C42.5181 25.3348 43.1691 22.407 43.1735 19.4611C43.181 14.3388 41.2854 9.49561 37.8357 5.82369C34.3853 2.15096 29.7875 0.0836476 24.889 0.00251856C19.8097 -0.0814855 15.0354 1.93839 11.446 5.69081C7.85665 9.44332 5.92425 14.4346 6.00469 19.7451C6.08229 24.8661 8.05972 29.673 11.5726 33.2803C15.078 36.8798 19.6988 38.861 24.5879 38.8608C24.5975 38.8608 24.6077 38.8608 24.6171 38.8608C27.435 38.8563 30.2356 38.1757 32.7537 36.8879L40.1911 39.5596C40.501 39.671 40.8188 39.7252 41.1329 39.7252C41.8795 39.7252 42.6055 39.4187 43.1563 38.8428C43.9388 38.0247 44.2014 36.8369 43.8418 35.7427ZM26.3834 26.1731H16.7865C16.0633 26.1731 15.477 25.5601 15.477 24.804C15.477 24.0479 16.0633 23.435 16.7865 23.435H26.3833C27.1066 23.435 27.6929 24.048 27.6929 24.804C27.6929 25.5602 27.1067 26.1731 26.3834 26.1731ZM32.3894 20.5426H16.7866C16.0633 20.5426 15.4771 19.9296 15.4771 19.1736C15.4771 18.4176 16.0634 17.8046 16.7866 17.8046H32.3894C33.1127 17.8046 33.6989 18.4176 33.6989 19.1736C33.6989 19.9296 33.1127 20.5426 32.3894 20.5426ZM32.3894 14.912H16.7866C16.0633 14.912 15.4771 14.299 15.4771 13.543C15.4771 12.7869 16.0634 12.1739 16.7866 12.1739H32.3894C33.1127 12.1739 33.6989 12.787 33.6989 13.543C33.6989 14.299 33.1127 14.912 32.3894 14.912Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card bg-4">
                            <div class="card-body">
                                <div class="media static-widget">
                                    <div class="media-body">
                                        <h6 class="font-roboto">المصروفات</h6>
                                        <h4 class="mb-0 counter">45631</h4>
                                    </div>
                                    <svg class="fill-danger" width="41" height="46" viewBox="0 0 41 46"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5245 23.3155C24.0019 23.3152 26.3325 16.8296 26.9426 11.5022C27.6941 4.93936 24.5906 0 17.5245 0C10.4593 0 7.35423 4.93899 8.10639 11.5022C8.71709 16.8296 11.047 23.316 17.5245 23.3155Z">
                                        </path>
                                        <path
                                            d="M31.6878 26.0152C31.8962 26.0152 32.1033 26.0214 32.309 26.0328C32.0007 25.5931 31.6439 25.2053 31.2264 24.8935C29.9817 23.9646 28.3698 23.6598 26.9448 23.0998C26.2511 22.8273 25.6299 22.5567 25.0468 22.2485C23.0787 24.4068 20.5123 25.5359 17.5236 25.5362C14.536 25.5362 11.9697 24.4071 10.0019 22.2485C9.41877 22.5568 8.79747 22.8273 8.10393 23.0998C6.67891 23.6599 5.06703 23.9646 3.82233 24.8935C1.6698 26.5001 1.11351 30.1144 0.676438 32.5797C0.315729 34.6148 0.0734026 36.6917 0.00267388 38.7588C-0.0521202 40.36 0.738448 40.5846 2.07801 41.0679C3.75528 41.6728 5.48712 42.1219 7.23061 42.4901C10.5977 43.2011 14.0684 43.7475 17.5242 43.7719C19.1987 43.76 20.8766 43.6249 22.5446 43.4087C21.3095 41.6193 20.5852 39.4517 20.5852 37.1179C20.5853 30.9957 25.5658 26.0152 31.6878 26.0152Z">
                                        </path>
                                        <path
                                            d="M31.6878 28.2357C26.7825 28.2357 22.8057 32.2126 22.8057 37.1179C22.8057 42.0232 26.7824 46 31.6878 46C36.5932 46 40.57 42.0232 40.57 37.1179C40.57 32.2125 36.5931 28.2357 31.6878 28.2357ZM35.5738 38.6417H33.2118V41.0037C33.2118 41.8453 32.5295 42.5277 31.6879 42.5277C30.8462 42.5277 30.1639 41.8453 30.1639 41.0037V38.6417H27.802C26.9603 38.6417 26.278 37.9595 26.278 37.1177C26.278 36.276 26.9602 35.5937 27.802 35.5937H30.1639V33.2318C30.1639 32.3901 30.8462 31.7078 31.6879 31.7078C32.5296 31.7078 33.2118 32.3901 33.2118 33.2318V35.5937H35.5738C36.4155 35.5937 37.0978 36.276 37.0978 37.1177C37.0977 37.9595 36.4155 38.6417 35.5738 38.6417Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header border-bottom-0">
                                <h3>الطلبات</h3>
                            </div>
                            <div class="card-body pt-0">
                                <div id="chartone" class="chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header border-bottom-0">
                                <h3>المنتجات</h3>
                            </div>
                            <div class="card-body pt-0">
                                <div id="charttwo" class="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header border-bottom-0">
                        <h3>المستخدمين</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="chart3" class="chart"></div>
                            </div>
                            <div class="col-md-6">
                                <div id="chart4" class="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">جميع الحقوق محفوظة © 2022 لدى شركة Codlop</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<!-- latest jquery-->
<script src="{{asset('assets/dashboard')}}/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/scrollbar/simplebar.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/scrollbar/custom.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/counter/jquery.waypoints.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/counter/jquery.counterup.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/sidebar-menu.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/notify/bootstrap-notify.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/notify/index.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/echarts.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/datatable/datatables/jquery.datatables.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/datatable/datatable-extension/jszip.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/select2/select2.full.min.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="{{asset('assets/dashboard')}}/assets/js/script.js"></script>
<script>
    var myChart = echarts.init(document.getElementById('chartone'));
    option = {
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow'
            },
            textStyle: {
                fontFamily: 'Bahij_Plain'
            }
        },
        grid: {
            top: "9%",
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: [{
            data: ['Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr'],
            axisLabel: {
                textStyle: {
                    fontSize: 14,
                    fontFamily: 'Bahij_Plain'
                }
            }
        }],
        yAxis: [{
            type: 'value'
        }],
        series: [{
            name: 'الطلبات',
            type: 'bar',
            barWidth: '45%',
            data: [{
                value: 35,
                itemStyle: {
                    color: '#69F0AE'
                }
            },
                {
                    value: 30,
                    itemStyle: {
                        color: '#FFAB40'
                    }
                },
                {
                    value: 25,
                    itemStyle: {
                        color: '#41C4FF'
                    }
                },
                {
                    value: 20,
                    itemStyle: {
                        color: '#536DFE'
                    }
                },
                {
                    value: 15,
                    itemStyle: {
                        color: '#FF4081'
                    }
                },
                {
                    value: 10,
                    itemStyle: {
                        color: '#26A69A'
                    }
                },
                {
                    value: 5,
                    itemStyle: {
                        color: '#D4E157'
                    }
                }
            ]
        }]
    };
    myChart.setOption(option);
</script>
<script>
    var myChart = echarts.init(document.getElementById('charttwo'));
    option = {
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow'
            },
            textStyle: {
                fontFamily: 'Bahij_Plain'
            }
        },
        grid: {
            top: "4%",
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: {
            type: 'value',
        },
        yAxis: {
            data: ['Title', 'Title', 'Title', 'Title', 'Title'],
            axisLabel: {
                textStyle: {
                    fontSize: 14,
                    fontFamily: 'Bahij_Plain'
                }
            }
        },
        series: [{
            name: 'المنتجات',
            type: 'bar',
            barWidth: '30%',
            data: [{
                value: 35,
                itemStyle: {
                    color: '#FFAB40',
                    barBorderRadius: [0, 50, 50, 0]
                }
            },
                {
                    value: 65,
                    itemStyle: {
                        color: '#69F0AE',
                        barBorderRadius: [0, 50, 50, 0]
                    }
                },
                {
                    value: 57,
                    itemStyle: {
                        color: '#41C4FF',
                        barBorderRadius: [0, 50, 50, 0]
                    }
                },
                {
                    value: 50,
                    itemStyle: {
                        color: '#536DFE',
                        barBorderRadius: [0, 50, 50, 0]
                    }
                },
                {
                    value: 45,
                    itemStyle: {
                        color: '#FF4081',
                        barBorderRadius: [0, 50, 50, 0]
                    }
                }
            ]
        }]
    };
    myChart.setOption(option);
</script>
<script>
    var myChart = echarts.init(document.getElementById('chart3'));
    option = {
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow'
            },
            textStyle: {
                fontFamily: 'Bahij_Plain'
            }
        },
        legend: {
            textStyle: {
                fontSize: 16,
                fontFamily: 'Bahij_Plain'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: [{
            type: 'category',
            data: ['Tilte', 'Tilte', 'Tilte', 'Tilte', 'Tilte'],
            axisLabel: {
                textStyle: {
                    fontSize: 15,
                    fontFamily: 'Bahij_Plain'
                }
            }
        }],
        yAxis: [{
            type: 'value'
        }],
        series: [{
            name: 'Tilte',
            type: 'line',
            barWidth: '45%',
            smooth: true,
            data: [20, 5, 10, 30, 5],
            color: '#41C4FF'
        },
            {
                name: 'Tilte2',
                type: 'line',
                smooth: true,
                data: [5, 10, 7, 20, 15],
                color: '#FFAB40'
            }
        ]
    };

    myChart.setOption(option);
</script>
<script>
    var myChart = echarts.init(document.getElementById('chart4'));
    var colorPalette = ['#FFAB40', '#41C4FF', '#FF4081'];
    option = {
        tooltip: {
            trigger: 'item',
            textStyle: {
                fontFamily: 'Bahij_Plain'
            }
        },
        series: [{
            type: 'pie',
            radius: ['40%', '70%'],
            avoidLabelOverlap: false,
            itemStyle: {
                borderRadius: 10,
                borderColor: '#fff',
                borderWidth: 2
            },
            label: {
                textStyle: {
                    fontFamily: 'Bahij_Plain',
                    fontSize: '20'
                }
            },
            emphasis: {
                label: {
                    fontWeight: 'bold'
                }
            },
            labelLine: {
                show: true
            },
            data: [{
                value: 1048,
                name: 'Tilte'
            },
                {
                    value: 735,
                    name: 'Tilte2'
                },
                {
                    value: 580,
                    name: 'Tilte3'
                }
            ],
            color: colorPalette
        }],
        graph: {
            color: colorPalette
        }
    };
    myChart.setOption(option);
</script>
</body>

</html>
