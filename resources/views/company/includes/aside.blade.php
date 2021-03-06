<div class="sidebar-wrapper">
    <div class="logo-wrapper"><a href="{{route('company.home')}}"><img class="img-fluid for-light"
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

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('moderators.index')}}">
                        <img src="{{asset('assets/dashboard')}}/images/icons/manager.png" alt="">
                        <span>المشرفين</span></a>
                </li>

                @endpermission

                @permission('read_employees')

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('employees.index')}}">
                        <img src="{{asset('assets/dashboard')}}/images/icons/boss.png" alt="">
                        <span>الموظفين</span></a>
                </li>

                @endpermission


                @permission(['read_customers'])

                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0);">
                        <img src="{{asset('assets/dashboard')}}/images/icons/rating.png" alt="">
                        <span>بيانات العملاء</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('customers.index')}}">العملاء</a></li>

                    </ul>

                </li>

                @endpermission

                @permission('read_trucks')

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('trucks.index')}}">
                        <img src="{{asset('assets/dashboard')}}/images/icons/truck.png" alt="">
                        <span>الشاحنات</span></a>
                </li>

                @endpermission

                @role('driver')
                @permission('read_driver-requests')

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('driver-requests.index')}}">
                        <img src="{{asset('assets/dashboard')}}/images/icons/truck.png" alt="">
                        <span>طلباتي </span></a>
                </li>

                @endpermission
                @endrole

                @permission(['read_containers','read_container-rentals','read_contracts'])

                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0);">
                        <img src="{{asset('assets/dashboard')}}/images/icons/container.png" alt="">
                        <span> بيانات الحاويات</span></a>
                    <ul class="sidebar-submenu">
                        @permission(['read_containers'])
                        <li><a href="{{route('containers.index')}}">الحاويات</a></li>
                        @endpermission
                        @permission(['read_container-rentals'])
                        <li><a href="{{route('container-rentals.index')}}">إيجار الحاويات</a></li>
                        @endpermission

                        @permission(['read_contracts'])
                        <li><a href="{{route('contracts.index')}}">العقود</a></li>
                        @endpermission
                    </ul>

                </li>

                @endpermission


                @permission('read_roles')

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('roles.index')}}">
                        <img src="{{asset('assets/dashboard')}}/images/icons/lock.png" alt="">
                        <span>الصلاحيات والأدوار</span></a>
                </li>

                @endpermission

                @permission(['read_apps','read_branches' ,'read_categories' ,'read_category-sizes','read_rent-types','read_job-types'])
                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;">
                        <img src="{{asset('assets/dashboard')}}/images/icons/setting.png" alt="">
                        <span>الاعدادات</span></a>
                    <ul class="sidebar-submenu">

                        @permission('read_apps')
                        <li><a href="{{route('apps.index')}}">التحكم في التطبيقات</a></li>
                        @endpermission

                        @permission('read_branches')
                        <li><a href="{{route('branches.index')}}">الفروع</a></li>
                        @endpermission

                        @permission('read_categories')
                        <li><a href="{{route('categories.index')}}">التصنيفات</a></li>
                        @endpermission

                        @permission('read_category-sizes')
                        <li><a href="{{route('category-sizes.index')}}">أحجام التصنيفات</a></li>
                        @endpermission

                        @permission('read_rent-types')
                        <li><a href="{{route('rent-types.index')}}">أنواع الإيجار</a></li>
                        @endpermission

                        @permission('read_job-types')
                        <li><a href="{{route('job-types.index')}}">أنواع الوظائف</a></li>
                        @endpermission

                        @permission('read_company-clauses')
                        <li><a href="{{route('company-clauses.index')}}">بنود العقود</a></li>
                        @endpermission

                        @permission('read_company-settings')
                        <li><a class="show_modal" href="{{route('company-settings.index')}}">الإعددات العامه</a></li>
                        @endpermission

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


