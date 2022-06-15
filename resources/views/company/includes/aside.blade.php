<div class="sidebar-wrapper">
    <div class="logo-wrapper"><a href="{{route('admin.home')}}"><img class="img-fluid for-light"
                                                                     src="{{asset('assets/dashboard')}}/images/logo.svg" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
    </div>

    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i class="fa fa-arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('company.home')}}">
                        <img src="{{asset('assets/dashboard')}}/images/icons/home.png" alt="">
                        <span>الرئيسية</span></a>
                </li>

                @permission('read_moderators')
                @if(active_apps('moderators'))
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('moderators.index')}}">
                            <img src="{{asset('assets/dashboard')}}/images/icons/manager.png" alt="">
                            <span>المشرفين</span></a>
                    </li>
                @endif
                @endpermission

                @permission('read_employees')
                @if(active_apps('employees'))
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('employees.index')}}">
                            <img src="{{asset('assets/dashboard')}}/images/icons/boss.png" alt="">
                            <span>الموظفين</span></a>
                    </li>
                @endif
                @endpermission


                @permission(['read_customers'])
                @if(active_apps('customers') && active_apps('customer-addresses'))
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0);">
                          <img src="{{asset('assets/dashboard')}}/images/icons/rating.png" alt="">
                            <span>بيانات العملاء</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('customers.index')}}">العملاء</a></li>

                        </ul>

                    </li>
                @endif
                @endpermission

                @permission('read_trucks')
                @if(active_apps('trucks'))
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('trucks.index')}}">
                            <img src="{{asset('assets/dashboard')}}/images/icons/truck.png" alt="">
                            <span>الشاحنات</span></a>
                    </li>
                @endif
                @endpermission



                @permission(['read_container','read_container-rentals'])
                @if(active_apps('containers') && active_apps('container-rentals'))
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0);">
                             <img src="{{asset('assets/dashboard')}}/images/icons/container.png" alt="">
                            <span> بيانات الحاويات</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('containers.index')}}">الحاويات</a></li>
                            <li><a href="{{route('container-rentals.index')}}">إيجار الحاويات</a></li>
                        </ul>

                    </li>
                @endif
                @endpermission


                @permission('read_roles')
                @if(active_apps('roles'))
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0);">
                            <img src="{{asset('assets/dashboard')}}/images/icons/lock.png" alt="">
                            <span>الصلاحيات والأدوار</span></a>

                        <ul class="sidebar-submenu">

                            <li><a href="{{route('roles.index')}}">الأدوار</a></li>
                        </ul>
                    </li>
                @endif
                @endpermission

                @permission(['read_apps','read_branches' ,'read_categories' ,'read_category-sizes','read_rent-types','read_job-types'])
                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                        <img src="{{asset('assets/dashboard')}}/images/icons/setting.png" alt="">
                        <span>الاعدادات</span></a>
                    <ul class="sidebar-submenu">
                        @if(active_apps('apps'))
                            @permission('read_apps')
                            <li><a href="{{route('apps.index')}}">التحكم في التطبيقات</a></li>
                            @endpermission
                        @endif
                        @if(active_apps('branches'))
                            @permission('read_branches')
                            <li><a href="{{route('branches.index')}}">الفروع</a></li>
                            @endpermission
                        @endif

                        @if(active_apps('categories'))
                            @permission('read_categories')
                            <li><a href="{{route('categories.index')}}">التصنيفات</a></li>
                            @endpermission
                        @endif

                        @if(active_apps('category-sizes'))
                            @permission('read_category-sizes')
                            <li><a href="{{route('category-sizes.index')}}">أحجام التصنيفات</a></li>
                            @endpermission
                        @endif

                        @if(active_apps('rent-types'))
                            @permission('read_rent-types')
                            <li><a href="{{route('rent-types.index')}}">أنواع الإيجار</a></li>
                            @endpermission
                        @endif

                        @if(active_apps('job-types'))
                            @permission('read_job-types')
                            <li><a href="{{route('job-types.index')}}">أنواع الوظائف</a></li>
                            @endpermission
                        @endif
                    </ul>
                </li>
                @endpermission

            </ul>
            <div class="road">
                <div class="buildings">
                    <img src="{{asset('assets/dashboard')}}/images/tree.svg" alt="">
                    <img src="{{asset('assets/dashboard')}}/images/house.svg" alt="">
                    <img src="{{asset('assets/dashboard')}}/images/tree.svg" alt="">
                </div>
                <img class="image truck-img" src="{{asset('assets/dashboard')}}/images/truck.png" alt="">
                <img class="image box-img" src="{{asset('assets/dashboard')}}/images/box.png" alt="">
                <img class="image box-img box-img2" src="{{asset('assets/dashboard')}}/images/box.png" alt="">
            </div>
        </div>
        <div class="right-arrow" id="right-arrow"><i class="fa fa-arrow-left"></i></div>
    </nav>
</div>


