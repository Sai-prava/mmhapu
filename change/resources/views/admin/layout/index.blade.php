<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ Auth::user()->name }} Admin Panel | Exam System</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('user_asset/global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('user_asset/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('user_asset/assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('user_asset/assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('user_asset/assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('user_asset/assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('user_asset/assets/css/toastr.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('user_asset/global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('user_asset/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js') }}"></script>

    <script src="{{ asset('user_asset/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/demo_pages/form_select2.js') }}"></script>

    <script src="{{ asset('user_asset/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script src="{{ asset('user_asset/global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>

    <script src="{{ asset('user_asset/assets/js/app.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/demo_pages/datatables_basic.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/demo_pages/form_layouts.js') }}"></script>
    <script src="{{ asset('user_asset/global_assets/js/demo_pages/dashboard.js') }}"></script>
    <!-- /theme JS files -->

    <!-- Theme JS files -->

    <script src="{{ asset('user_asset/global_assets/js/demo_pages/job_list.js') }}"></script>
    <!-- /theme JS files -->

    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('dashboard/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- data tables css -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/data-tables/css/datatables.min.css') }}">
    <!-- select2 css -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/select2/css/select2.min.css') }}">
    <!-- material datetimepicker css -->
    <link rel="stylesheet"
        href="{{ asset('dashboard/plugins/material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}">
    <!-- minicolors css -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/mini-color/css/jquery.minicolors.css') }}">
    <!-- toastr css -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/toastr/css/toastr.min.css') }}">

    <style>
        .pdng {
            padding: .9375rem 1.25rem;
        }
    </style>
    @yield('styles')
</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark">
        <div class="navbar-brand">
            <a href="{{ url('/') }}" class="text-light">
                <h3 class="m-0"><b>Admin Panel Menu</b></h3>
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
            </ul>

            <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

            <ul class="navbar-nav">



                <li class="nav-item dropdown dropdown-user">
                    <a href="" class="navbar-nav-link d-flex align-items-center dropdown-toggle"
                        data-toggle="dropdown">
                        <img src="" class="rounded-circle mr-2" height="34" alt="">
                        <span>{{ Auth::user()->name }}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('logout') }}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Navigation
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3">
                                {{-- <a href="{{asset(Auth::user()->image)}}"><img src="{{asset(Auth::user()->image)}}" width="38" height="38" class="rounded-circle" alt=""></a> --}}
                            </div>

                            <div class="media-body">
                                <div class="media-title font-weight-semibold">{{ Auth::user()->name }}</div>
                                <div class="font-size-xs opacity-50">MMHAPU
                                </div>
                            </div>

                            <div class="ml-3 align-self-center">
                                <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <!-- Main -->
                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-xs line-height-xs">Admin Panel</div> <i
                                class="icon-menu" title="Main"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard.index') }}"
                                class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                                <i class="icon-home4"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li
                            class="nav-item nav-item-submenu {{ Request::is('admin/web/student_grievance*') || Request::is('admin/web/social-setting') || Request::is('admin/web/topbar-setting') || Request::is('admin/web/slider') || Request::is('admin/web/overview*') || Request::is('admin/web/student*') || Request::is('admin/web/administration*') || Request::is('admin/web/campus*') || Request::is('admin/web/team/list') || Request::is('admin/web/web-event') || Request::is('admin/web/gallery') || Request::is('admin/web/galleries*') || Request::is('admin/web/committe_title*') || Request::is('admin/web/committe*') || Request::is('admin/web/study_material*') ? 'nav-item-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="fas fa-check-circle"></i>
                                <span>Home Page</span>
                            </a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                style="{{ Request::is('admin/web/student_grievance*') || Request::is('admin/web/social-setting') || Request::is('admin/web/topbar-setting') || Request::is('admin/web/slider') || Request::is('admin/web/overview*') || Request::is('admin/web/student*') || Request::is('admin/web/administration*') || Request::is('admin/web/campus*') || Request::is('admin/web/team/list') || Request::is('admin/web/web-event') || Request::is('admin/web/gallery') || Request::is('admin/web/galleries*') || Request::is('admin/web/committe_title*') || Request::is('admin/web/committe*') || Request::is('admin/web/study_material*') ? 'display:block' : '' }}">

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/committe_title*') || Request::is('admin/web/committe*') ? 'nav-item-open' : '' }}">
                                    <a href="#" class="nav-link"><span>Committees</span></a>

                                    <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                        style="{{ Request::is('admin/web/committe_title*') || Request::is('admin/web/committe*') ? 'display:block' : '' }}">

                                        <li class="nav-item"><a
                                                href="{{ route('admin.committe_title.list') }}"
                                                class="nav-link {{ Request::is('admin/web/committe_title*') ? 'active' : '' }}">Title</a>
                                        </li>

                                        <li class="nav-item"><a href="{{ route('admin.committe.list') }}"
                                                class="nav-link {{ Request::is('admin/web/committe*') ? 'active' : '' }}">Committees</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.slider.index') }}"
                                        class="nav-link {{ Request::is('admin/web/slider') ? 'active' : '' }}">
                                        <span>Sliders</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.Overview.list') }}"
                                        class="nav-link {{ Request::is('admin/web/overview*') ? 'active' : '' }}">
                                        <span>Institution Overview</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.Team.list') }}"
                                        class="nav-link {{ Request::is('admin/web/team/list') ? 'active' : '' }}">
                                        <span>Team</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.studyMaterial.list') }}"
                                        class="nav-link {{ Request::is('admin/web/study_material*') ? 'active' : '' }}">
                                        <span>Study Material</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.web-event.index') }}"
                                        class="nav-link {{ Request::is('admin/web/web-event') ? 'active' : '' }}">
                                        <span>Event</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.campus.list') }}"
                                        class="nav-link {{ Request::is('admin/web/campus*') ? 'active' : '' }}">
                                        <span>Campus Section</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.administration.list') }}"
                                        class="nav-link {{ Request::is('admin/web/administration*') ? 'active' : '' }}">
                                        <span>Administration Section</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.student.list') }}"
                                        class="nav-link {{ Request::is('admin/web/student*') ? 'active' : '' }}">
                                        <span>Student Section</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.studentGrievance.list') }}"
                                        class="nav-link {{ Request::is('admin/web/student_grievance*') ? 'active' : '' }}">
                                        <span>Student Grievance Redressal Committee</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.topbar-setting.index') }}"
                                        class="nav-link {{ Request::is('admin/web/topbar-setting') ? 'active' : '' }}">
                                        <span>Contact Setting</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.social-setting.index') }}"
                                        class="nav-link {{ Request::is('admin/web/social-setting') ? 'active' : '' }}">
                                        <span>Social Setting</span>
                                    </a>
                                </li>

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/gallery') || Request::is('admin/web/galleries*') ? 'nav-item-open' : '' }}">
                                    <a href="#" class="nav-link"><span>Gallery</span></a>

                                    <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                        style="{{ Request::is('admin/web/gallery') || Request::is('admin/web/galleries*') ? 'display:block' : '' }}">

                                        <li class="nav-item"><a href="{{ route('admin.gallery.index') }}"
                                                class="nav-link {{ Request::is('admin/web/gallery') ? 'active' : '' }}">Gallery
                                                Title</a></li>

                                        <li class="nav-item"><a href="{{ route('admin.Viewgalleries.list') }}"
                                                class="nav-link {{ Request::is('admin/web/galleries*') ? 'active' : '' }}">Gallery</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="nav-item nav-item-submenu {{ Request::is('admin/web/act_status*') || Request::is('admin/web/about-us') ? 'nav-item-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="fas fa-check-circle"></i>
                                <span>About Us</span>
                            </a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                style="{{ Request::is('admin/web/act_status*') || Request::is('admin/web/about-us') ? 'display:block' : '' }}">

                                <li class="nav-item">
                                    <a href="{{ route('admin.about-us.index') }}"
                                        class="nav-link {{ Request::is('admin/web/about-us') ? 'active' : '' }}">
                                        <span>About</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.actStatus.list') }}"
                                        class="nav-link {{ Request::is('admin/web/act_status*') ? 'active' : '' }}">
                                        <span>Act & Status</span>
                                    </a>
                                </li>

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/university_officers_submenu*') ? 'nav-item-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('admin/web/university_officers*') ? 'active' : '' }}">
                                        Officers
                                    </a>

                                    <ul class="nav nav-group-sub"
                                        style="{{ Request::is('admin/web/university_officers_submenu*') ? 'display:block' : '' }}">
                                        <li class="nav-item">
                                            <a href=""
                                                class="nav-link {{ Request::is('admin/web/university_officers_reports*') ? 'active' : '' }}">
                                                Reports
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=""
                                                class="nav-link {{ Request::is('admin/web/university_officers_activities*') ? 'active' : '' }}">
                                                Activities
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="nav-item nav-item-submenu {{ Request::is('admin/web/iqac_eventtitle*') || Request::is('admin/web/iqac_event*') || Request::is('admin/web/evaluation_title*') || Request::is('admin/web/evaluation_report*') || Request::is('admin/web/iqac_committes_title*') || Request::is('admin/web/iqac_committes_cells*') || Request::is('admin/web/collabration*') || Request::is('admin/web/minutes*') || Request::is('admin/web/policies*') || Request::is('admin/web/feedback*') || Request::is('admin/web/committees*') ? 'nav-item-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="fas fa-check-circle"></i>
                                <span>IQAC</span>
                            </a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                style="{{ Request::is('admin/web/iqac_eventtitle*') || Request::is('admin/web/iqac_event*') || Request::is('admin/web/evaluation_title*') || Request::is('admin/web/evaluation_report*') || Request::is('admin/web/iqac_committes_title*') || Request::is('admin/web/iqac_committes_cells*') || Request::is('admin/web/collabration*') || Request::is('admin/web/minutes*') || Request::is('admin/web/policies*') || Request::is('admin/web/feedback*') || Request::is('admin/web/committees*') ? 'display:block' : '' }}">

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/iqac_eventtitle*') || Request::is('admin/web/iqac_event*') ? 'nav-item-open' : '' }}">
                                    <a href="#" class="nav-link"><span> Event</span></a>

                                    <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                        style="{{ Request::is('admin/web/iqac_eventtitle*') || Request::is('admin/web/iqac_event*') ? 'display:block' : '' }}">

                                        <li class="nav-item"><a href="{{ route('admin.IqacEventTitle.list') }}"
                                                class="nav-link {{ Request::is('admin/web/iqac_eventtitle*') ? 'active' : '' }}">Title</a>
                                        </li>

                                        <li class="nav-item"><a href="{{ route('admin.IqacEvent.list') }}"
                                                class="nav-link {{ Request::is('admin/web/iqac_event*') ? 'active' : '' }}">Event</a>
                                        </li>
                                    </ul>
                                </li>

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/evaluation_title*') || Request::is('admin/web/evaluation_report*') ? 'nav-item-open' : '' }}">
                                    <a href="#" class="nav-link"></i> <span> Evaluation Report</span></a>

                                    <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                        style="{{ Request::is('admin/web/evaluation_title*') || Request::is('admin/web/evaluation_report*') ? 'display:block' : '' }}">

                                        <li class="nav-item"><a href="{{ route('admin.Evaluation.index') }}"
                                                class="nav-link {{ Request::is('admin/web/evaluation_title*') ? 'active' : '' }}">Title</a>
                                        </li>

                                        <li class="nav-item"><a href="{{ route('admin.evaluation_report.list') }}"
                                                class="nav-link {{ Request::is('admin/web/evaluation_report*') ? 'active' : '' }}">Evaluation
                                                Report</a>
                                        </li>
                                    </ul>
                                </li>

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/iqac_committes_title*') || Request::is('admin/web/iqac_committes_cells*') ? 'nav-item-open' : '' }}">
                                    <a href="#" class="nav-link"><span> Committees & Cells</span></a>

                                    <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                        style="{{ Request::is('admin/web/iqac_committes_title*') || Request::is('admin/web/iqac_committes_cells*') ? 'display:block' : '' }}">

                                        <li class="nav-item"><a href="{{ route('admin.CommitteesCellsTitle.list') }}"
                                                class="nav-link {{ Request::is('admin/web/iqac_committes_title*') ? 'active' : '' }}">Title</a>
                                        </li>

                                        <li class="nav-item"><a href="{{ route('admin.committesCells.list') }}"
                                                class="nav-link {{ Request::is('admin/web/iqac_committes_cells*') ? 'active' : '' }}">Committees
                                                & Cells</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.Collabration.list') }}"
                                        class="nav-link {{ Request::is('admin/web/collabration*') ? 'active' : '' }}">
                                        <span>Collabration</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.minutes.list') }}"
                                        class="nav-link {{ Request::is('admin/web/minutes*') ? 'active' : '' }}">
                                        <span>Minutes</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.policies.list') }}"
                                        class="nav-link {{ Request::is('admin/web/policies*') ? 'active' : '' }}">
                                        <span>Policies</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.Feedback.index') }}"
                                        class="nav-link {{ Request::is('admin/web/feedback*') ? 'active' : '' }}">
                                        <span>IQAC Feedback</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.committees.list') }}"
                                        class="nav-link {{ Request::is('admin/web/committees*') ? 'active' : '' }}">
                                        <span>IQAC Committees</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="nav-item nav-item-submenu {{ Request::is('admin/web/attendance*') || Request::is('admin/web/attendance_title*') || Request::is('admin/web/elearning*') || Request::is('admin/web/elearning_title*') || Request::is('admin/web/grievances_list*') || Request::is('admin/web/syllabus_title*') || Request::is('admin/web/syllabus*') || Request::is('admin/web/degree_certificate*') ||Request::is('admin/web/certificate_view*') || Request::is('admin/web/anti_raging*') ? 'nav-item-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="fas fa-check-circle"></i>
                                <span>Students Section</span>
                            </a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                style="{{ Request::is('admin/web/attendance*') || Request::is('admin/web/attendance_title*') || Request::is('admin/web/elearning*') || Request::is('admin/web/elearning_title*') || Request::is('admin/web/grievances_list*') || Request::is('admin/web/syllabus_title*') || Request::is('admin/web/syllabus*') || Request::is('admin/web/degree_certificate*') || Request::is('admin/web/certificate_view*') || Request::is('admin/web/anti_raging*') ? 'display:block' : '' }}">

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/attendance*') || Request::is('admin/web/attendance_title*') ? 'nav-item-open' : '' }}">
                                    <a href="#" class="nav-link"><span>Attendance</span></a>

                                    <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                        style="{{ Request::is('admin/web/attendance*') || Request::is('admin/web/attendance_title*') ? 'display:block' : '' }}">

                                        <li class="nav-item"><a href="{{ route('admin.attendanceTitle.list') }}"
                                                class="nav-link {{ Request::is('admin/web/attendance_title*') ? 'active' : '' }}">Title</a>
                                        </li>

                                        <li class="nav-item"><a href="{{ route('admin.attendance.list') }}"
                                                class="nav-link {{ Request::is('admin/web/attendance*') ? 'active' : '' }}">Attendance</a>
                                        </li>
                                    </ul>
                                </li>

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/elearning*') || Request::is('admin/web/elearning_title*') ? 'nav-item-open' : '' }}">
                                    <a href="#" class="nav-link"><span>e-Learning</span></a>

                                    <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                        style="{{ Request::is('admin/web/elearning*') || Request::is('admin/web/elearning_title*') ? 'display:block' : '' }}">

                                        <li class="nav-item"><a href="{{ route('admin.elearningTitle.list') }}"
                                                class="nav-link {{ Request::is('admin/web/elearning_title*') ? 'active' : '' }}">Title</a>
                                        </li>

                                        <li class="nav-item"><a href="{{ route('admin.elearning.list') }}"
                                                class="nav-link {{ Request::is('admin/web/elearning*') ? 'active' : '' }}">e-Learning</a>
                                        </li>
                                    </ul>
                                </li>

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/syllabus_title*') || Request::is('admin/web/syllabus*') ? 'nav-item-open' : '' }}">
                                    <a href="#" class="nav-link"></i> <span>Syllabus</span></a>

                                    <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                        style="{{ Request::is('admin/web/syllabus_title*') || Request::is('admin/web/syllabus*') ? 'display:block' : '' }}">

                                        <li class="nav-item"><a href="{{ route('admin.syllabus.index') }}"
                                                class="nav-link {{ Request::is('admin/web/syllabus_title*') ? 'active' : '' }}">Department</a>
                                        </li>

                                        <li class="nav-item"><a href="{{ route('admin.syllabus.list') }}"
                                                class="nav-link {{ Request::is('admin/web/syllabus*') ? 'active' : '' }}">Syllabus</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.grievances_list') }}"
                                        class="nav-link {{ Request::is('admin/web/grievances_list*') ? 'active' : '' }}">
                                        <span>Grievances Form</span>
                                    </a>
                                </li>

                                <li class="nav-item"><a href="{{ route('admin.antiRaging.list') }}"
                                        class="nav-link {{ Request::is('admin/web/anti_raging*') ? 'active' : '' }}">Anti-Raging</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('admin.certificateView') }}"
                                        class="nav-link {{ Request::is('admin/web/certificate_view*') ? 'active' : '' }}">Application Online Certificate</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('admin.certificate.index') }}"
                                        class="nav-link {{ Request::is('admin/web/degree_certificate*') ? 'active' : '' }}">Degree Certificate</a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="nav-item nav-item-submenu {{ Request::is('admin/web/proceedings*') || Request::is('admin/web/news') || Request::is('admin/web/view_news*') || Request::is('admin/web/gyangrah*') || Request::is('admin/web/harmony*') || Request::is('admin/web/reports*') || Request::is('admin/web/enews_letter*') || Request::is('admin/web/monograph*') || Request::is('admin/web/documentation*') ? 'nav-item-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="fas fa-check-circle"></i>
                                <span>Publications</span>
                            </a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                style="{{ Request::is('admin/web/proceedings*') || Request::is('admin/web/news') || Request::is('admin/web/view_news*') || Request::is('admin/web/gyangrah*') || Request::is('admin/web/harmony*') || Request::is('admin/web/reports*') || Request::is('admin/web/enews_letter*') || Request::is('admin/web/monograph*') || Request::is('admin/web/documentation*') ? 'display:block' : '' }}">

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/news') || Request::is('admin/web/view_news*') ? 'nav-item-open' : '' }}">
                                    <a href="#" class="nav-link"><span>News Paper Clipping</span></a>
                                    <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                        style="{{ Request::is('admin/web/news') || Request::is('admin/web/view_news*') ? 'display:block' : '' }}">
                                        <li class="nav-item"><a href="{{ route('admin.news.index') }}"
                                                class="nav-link {{ Request::is('admin/web/news') ? 'active' : '' }}">News
                                                Title</a></li>
                                        <li class="nav-item"><a href="{{ route('admin.view_news.list') }}"
                                                class="nav-link {{ Request::is('admin/web/view_news*') ? 'active' : '' }}">News</a>
                                        </li>
                                    </ul>
                                </li>

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/gyangrah*') || Request::is('admin/web/harmony*') ? 'nav-item-open' : '' }}">
                                    <a href="#" class="nav-link"><span>Annual Magazine</span></a>

                                    <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                        style="{{ Request::is('admin/web/gyangrah*') || Request::is('admin/web/harmony*') ? 'display:block' : '' }}">

                                        <li class="nav-item"><a href="{{ route('admin.gyangrah.list') }}"
                                                class="nav-link {{ Request::is('admin/web/gyangrah*') ? 'active' : '' }}">Gyanagrah</a>
                                        </li>

                                        <li class="nav-item"><a href="{{ route('admin.harmony.list') }}"
                                                class="nav-link {{ Request::is('admin/web/harmony*') ? 'active' : '' }}">Harmony</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.monograph.list') }}"
                                        class="nav-link {{ Request::is('admin/web/monograph*') ? 'active' : '' }}">
                                        <span>Monograph</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.documentation.list') }}"
                                        class="nav-link {{ Request::is('admin/web/documentation*') ? 'active' : '' }}">
                                        <span>Documentation</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.enews_letter.list') }}"
                                        class="nav-link {{ Request::is('admin/web/enews_letter*') ? 'active' : '' }}">
                                        <span>E-News Letter</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.reports.list') }}"
                                        class="nav-link {{ Request::is('admin/web/reports*') ? 'active' : '' }}">
                                        <span>Annual Reports</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.proceedings.list') }}"
                                        class="nav-link {{ Request::is('admin/web/proceedings*') ? 'active' : '' }}">
                                        <span>Proceedings</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="nav-item nav-item-submenu {{ Request::is('admin/web/fazil*') || Request::is('admin/web/alim*') || Request::is('admin/web/krc_without_aicte*') || Request::is('admin/web/krc_with_aicte*') || Request::is('admin/web/bed*') ? 'nav-item-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="fas fa-check-circle"></i>
                                <span>Academic</span>
                            </a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                style="{{ Request::is('admin/web/fazil*') || Request::is('admin/web/alim*') || Request::is('admin/web/krc_without_aicte*') || Request::is('admin/web/krc_with_aicte*') || Request::is('admin/web/bed*') ? 'display:block' : '' }}">

                                <li class="nav-item">
                                    <a href="{{ route('admin.bed.list') }}"
                                        class="nav-link {{ Request::is('admin/web/bed*') ? 'active' : '' }}">
                                        <span>B.Ed</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.krcWithAicte.list') }}"
                                        class="nav-link {{ Request::is('admin/web/krc_with_aicte*') ? 'active' : '' }}">
                                        <span>KRC With AICTE Recognition</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.krcWithoutAicte.list') }}"
                                        class="nav-link {{ Request::is('admin/web/krc_without_aicte*') ? 'active' : '' }}">
                                        <span>KRC Without AICTE Recognition</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.alim.list') }}"
                                        class="nav-link {{ Request::is('admin/web/alim*') ? 'active' : '' }}">
                                        <span>ALIM</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.fazil.list') }}"
                                        class="nav-link {{ Request::is('admin/web/fazil*') ? 'active' : '' }}">
                                        <span>FAZIL</span>
                                    </a>
                                </li>

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/university_officers_submenu*') ? 'nav-item-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('admin/web/university_officers*') ? 'active' : '' }}">Officers</a>

                                    <ul class="nav nav-group-sub"
                                        style="{{ Request::is('admin/web/university_officers_submenu*') ? 'display:block' : '' }}">
                                        <li class="nav-item">
                                            <a href=""
                                                class="nav-link {{ Request::is('admin/web/university_officers_reports*') ? 'active' : '' }}">
                                                Reports
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=""
                                                class="nav-link {{ Request::is('admin/web/university_officers_activities*') ? 'active' : '' }}">
                                                Activities
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="nav-item nav-item-submenu {{ Request::is('admin/web/university_officers*') || Request::is('admin/web/university_officers*') || Request::is('admin/web/administrative_officers*') || Request::is('admin/web/authorities*') || Request::is('admin/web/position*') || Request::is('admin/web/authority*') ? 'nav-item-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="fas fa-check-circle"></i>
                                <span>Administrations</span>
                            </a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                style="{{ Request::is('admin/web/university_officers*') || Request::is('admin/web/university_officers*') || Request::is('admin/web/administrative_officers*') || Request::is('admin/web/authorities*') || Request::is('admin/web/position*') || Request::is('admin/web/authority*') ? 'display:block' : '' }}">

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/authorities*') || Request::is('admin/web/position*') || Request::is('admin/web/authority*') ? 'nav-item-open' : '' }}">
                                    <a href="#" class="nav-link"><span>University Authorities</span></a>

                                    <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                        style="{{ Request::is('admin/web/authorities*') || Request::is('admin/web/position*') || Request::is('admin/web/authority*') ? 'display:block' : '' }}">

                                        <li class="nav-item"><a href="{{ route('admin.authorities.list') }}"
                                                class="nav-link {{ Request::is('admin/web/authorities*') ? 'active' : '' }}">Title</a>
                                        </li>

                                        <li class="nav-item"><a href="{{ route('admin.position.list') }}"
                                                class="nav-link {{ Request::is('admin/web/position*') ? 'active' : '' }}">Position</a>
                                        </li>

                                        <li class="nav-item"><a href="{{ route('admin.authority.list') }}"
                                                class="nav-link {{ Request::is('admin/web/authority*') ? 'active' : '' }}">Authorities</a>
                                        </li>
                                    </ul>
                                </li>

                                <li
                                    class="nav-item nav-item-submenu {{ Request::is('admin/web/university_officers*') || Request::is('admin/web/university_officers*') ? 'nav-item-open' : '' }}">
                                    <a href="#" class="nav-link"><span>University Administrations</span></a>

                                    <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                        style="{{ Request::is('admin/web/university_officers*') || Request::is('admin/web/university_officers*') ? 'display:block' : '' }}">

                                        <li class="nav-item"><a
                                                href="{{ route('admin.university_officers_title.list') }}"
                                                class="nav-link {{ Request::is('admin/web/university_officers*') ? 'active' : '' }}">Title</a>
                                        </li>

                                        <li class="nav-item"><a href="{{ route('admin.university_officers.list') }}"
                                                class="nav-link {{ Request::is('admin/web/university_officers*') ? 'active' : '' }}">Officers</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.administrative_officers.list') }}"
                                        class="nav-link {{ Request::is('admin/web/administrative_officers*') ? 'active' : '' }}">
                                        <span>Administrative Officers</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="nav-item nav-item-submenu {{ Request::is('admin/noticetype*') || Request::is('admin/notice*') ? 'nav-item-open' : '' }}">
                            <a href="#" class="nav-link"><i class="fas fa-bullhorn"></i> <span>Notice
                                    Board</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                style="{{ Request::is('admin/noticetype*') || Request::is('admin/notice*') ? 'display:block' : '' }}">

                                <li class="nav-item"><a href="{{ route('admin.NoticeType.list') }}"
                                        class="nav-link {{ Request::is('admin/noticetype*') ? 'active' : '' }}">Notice
                                        Type</a></li>

                                <li class="nav-item"><a href="{{ route('admin.Notice.list') }}"
                                        class="nav-link {{ Request::is('admin/notice*') ? 'active' : '' }}">Notice</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="nav-item nav-item-submenu {{ Request::is('admin/web/quick_link*') || Request::is('admin/web/quicklink_title*') ? 'nav-item-open' : '' }}">
                            <a href="#" class="nav-link"><i class="fa fa-external-link"></i> <span>Quick
                                    Link</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                style="{{ Request::is('admin/web/quick_link*') || Request::is('admin/web/quicklink_title*') ? 'display:block' : '' }}">

                                <li class="nav-item"><a href="{{ route('admin.qtitle.list') }}"
                                        class="nav-link {{ Request::is('admin/web/quicklink_title*') ? 'active' : '' }}">Title</a>
                                </li>

                                <li class="nav-item"><a href="{{ route('admin.Quicklink.list') }}"
                                        class="nav-link {{ Request::is('admin/web/quick_link*') ? 'active' : '' }}">Quick
                                        Link</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.mous.list') }}"
                                class="nav-link {{ Request::is('admin/web/mous*') ? 'active' : '' }}">
                                <i class="fas fa-file-signature"></i>
                                <span>MOUs</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.facility.list') }}"
                                class="nav-link {{ Request::is('admin/web/facility*') ? 'active' : '' }}">
                                <i class="fas fa-warehouse"></i>
                                <span>Facilities</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.feature.index') }}"
                                class="nav-link {{ Request::is('admin/web/feature') ? 'active' : '' }}">
                                <i class="fas fa-cogs"></i>
                                <span>Features</span>
                            </a>
                        </li>

                        <li
                            class="nav-item nav-item-submenu {{ Request::is('admin/web/faculty/category*') || Request::is('admin/web/faculty/subcategory*') ? 'nav-item-open' : '' }}">
                            <a href="#" class="nav-link"><i class="fas fa-images"></i> <span>Faculty</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                style="{{ Request::is('admin/web/faculty/category*') || Request::is('admin/web/faculty/subcategory*') ? 'display:block' : '' }}">

                                <li class="nav-item"><a href="{{ route('admin.faculty.category.list') }}"
                                        class="nav-link {{ Request::is('admin/web/faculty/category*') ? 'active' : '' }}">Category</a>
                                </li>

                                <li class="nav-item"><a href="{{ route('admin.faculty.subcategory.list') }}"
                                        class="nav-link {{ Request::is('admin/web/faculty/subcategory*') ? 'active' : '' }}">Subcategory</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.Info.list') }}"
                                class="nav-link {{ Request::is('admin/web/info*') ? 'active' : '' }}">
                                <i class="fas fa-users"></i>
                                <span>Department Info</span>
                            </a>
                        </li>

                        {{-- <li class="nav-item nav-item-submenu {{ Request::is('admin/web/gallery') || Request::is('admin/web/galleries*') ? 'nav-item-open' : '' }}">
                            <a href="#" class="nav-link"><i class="fas fa-images"></i> <span>Gallery</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts"
                                style="{{ Request::is('admin/web/gallery') || Request::is('admin/web/galleries*') ? 'display:block' : '' }}">

                                <li class="nav-item"><a href="{{ route('admin.gallery.index') }}"
                                        class="nav-link {{ Request::is('admin/web/gallery') ? 'active' : '' }}">Gallery
                                        Title</a></li>

                                <li class="nav-item"><a href="{{ route('admin.Viewgalleries.list') }}"
                                        class="nav-link {{ Request::is('admin/web/galleries*') ? 'active' : '' }}">Gallery</a>
                                </li>
                            </ul>
                        </li> --}}

                        <li class="nav-item">
                            <a href="{{ route('admin.Mediapath.list') }}"
                                class="nav-link {{ Request::is('admin/web/media_path*') ? 'active' : '' }}">
                                <i class="fas fa-network-wired"></i>
                                <span>Media Path</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.page.index') }}"
                                class="nav-link {{ Request::is('admin/web/page') ? 'active' : '' }}">
                                <i class="fas fa-file-alt"></i>
                                <span>Pages</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.call-to-action.index') }}"
                                class="nav-link {{ Request::is('admin/web/call-to-action') ? 'active' : '' }}">
                                <i class="fas fa-hand-pointer"></i>
                                <span>Call To Action</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.Topbar.list') }}"
                                class="nav-link {{ Request::is('admin/web/top_bar*') ? 'active' : '' }}">
                                <i class="fa fa-navicon"></i>
                                <span>Top Bar</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.menu.index') }}"
                                class="nav-link {{ Request::is('admin/web/menu') ? 'active' : '' }}">
                                <i class="fas fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4><a href="{{ url()->previous() }}"><i
                                    class="icon-arrow-left52 mr-2"></i></a><span
                                class="font-weight-semibold">@yield('title')</span></h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i
                                class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="d-flex justify-content-center">

                            <a href="#" class="btn btn-float mt-3">
                                <h4><span id="ct" class="font-weight-semibold"></span></h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                @yield('content')

            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text ml-lg-auto">

                    </span>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
    <!-- Required Js -->
    <script src="{{ asset('dashboard/plugins/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/popper/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/jquery-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/pcoded.min.js') }}"></script>

    <!-- datatable Js -->
    <script src="{{ asset('dashboard/plugins/data-tables/js/datatables.min.js') }}"></script>

    <!-- form-validation Js -->
    <script src="{{ asset('dashboard/js/pages/form-validation.js') }}"></script>

    <!-- select2 Js -->
    <script src="{{ asset('dashboard/plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- material datetimepicker Js -->
    <script src="{{ asset('dashboard/plugins/moment/js/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
    </script>

    <!-- Input mask Js -->
    <script src="{{ asset('dashboard/plugins/inputmask/js/autoNumeric.js') }}"></script>

    <!-- minicolors Js -->
    <script src="{{ asset('dashboard/plugins/mini-color/js/jquery.minicolors.min.js') }}"></script>

    <!-- toastr Js -->
    <script src="{{ asset('dashboard/plugins/toastr/js/toastr.min.js') }}"></script>



    <!-- Print Js -->
    <script src="{{ asset('dashboard/plugins/print/js/jQuery.print.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            "use strict";
            $("html").find('.btn-print').on('click', function() {
                $.print(".printable");
            });
        });
    </script>

    <!-- Popup Window Js -->
    <script type="text/javascript">
        "use strict";

        function PopupWin(pageURL, pageTitle, popupWinWidth, popupWinHeight) {
            var left = (screen.width - popupWinWidth) / 2;
            var top = (screen.height - popupWinHeight) / 4;

            var myWindow = window.open(pageURL, pageTitle, 'resizable=yes, width=' + popupWinWidth + ', height=' +
                popupWinHeight + ', top=' + top + ', left=' + left);
        };
    </script>


    <!-- page js -->
    @yield('page_js')
    @yield('scripts')


    <script type="text/javascript">
        'use strict';
        $(document).ready(function() {
            // [ Single Select ] start
            $(".select2").select2();

            // [ Multi Select ] start
            $(".select2-multiple").select2({
                placeholder: "{{ __('select') }}"
            });

            // Date Picker
            $('.date').bootstrapMaterialDatePicker({
                setDate: new Date(),
                weekStart: 0,
                time: false
            });

            // Time Picker
            $('.time').bootstrapMaterialDatePicker({
                date: false,
                shortTime: true,
                format: 'HH:mm'
            });

            // Color Picker
            $('.color_picker').each(function() {
                $(this).minicolors({
                    control: $(this).attr('data-control') || 'hue',
                    defaultValue: $(this).attr('data-defaultValue') || '',
                    format: $(this).attr('data-format') || 'hex',
                    keywords: $(this).attr('data-keywords') || '',
                    inline: $(this).attr('data-inline') === 'true',
                    letterCase: $(this).attr('data-letterCase') || 'lowercase',
                    opacity: $(this).attr('data-opacity'),
                    position: $(this).attr('data-position') || 'bottom',
                    swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split(
                        '|') : [],
                    change: function(value, opacity) {
                        if (!value) return;
                        if (opacity) value += ', ' + opacity;
                        if (typeof console === 'object') {}
                    },
                    theme: 'bootstrap'
                });
            });

            // Number Musk
            // $('.autonumber').autoNumeric('init');
            new AutoNumeric('.autonumber', {
                minimumValue: '0',
                maximumValue: '999999999',
                decimalPlaces: 0,
                decimalCharacter: '.',
                digitGroupSeparator: '',
            });
        });
    </script>

    <script type="text/javascript">
        'use strict';
        $(document).ready(function() {
            // [ Zero-configuration ] start
            $('#basic-table').DataTable();
            $('.table').DataTable();
            $('#basic-table2').DataTable();

            // [ HTML5-Export ] start
            $('#export-table').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copyHtml5',
                        text: '<i class="fas fa-copy"></i>',
                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel"></i>',
                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'csvHtml5',
                        text: '<i class="fas fa-file"></i>',
                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fas fa-file-pdf"></i>',
                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i>',
                        autoPrint: true,
                        // title: '',
                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        },
                        customize: function(win) {
                            $(win.document.body)
                                .css('font-size', '10pt')
                            /*.prepend(
                            	'<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
                            );*/

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');

                            $(win.document.body).find('caption')
                                .css('font-size', '10px');

                            $(win.document.body).find('h1')
                                .css({
                                    "text-align": "center",
                                    "font-size": "16pt"
                                });
                        }
                    }
                ]
            });
        });
    </script>

    {{-- Set Cookie --}}
    <script type="text/javascript">
        "use strict";
        $(document).ready(function() {
            $("#mobile-collapse").on("click", function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('setCookie') }}",
                    method: 'get',
                    data: {},
                    success: function(result) {
                        console.log(result.data);
                    }
                });
            });
        });
    </script>


    {{-- Text Editors --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.3/tinymce.min.js"></script>

    @php
        $version = App\Models\Language::version();
    @endphp
    @if ($version->direction == 1)
        <script type="text/javascript">
            "use strict";
            tinymce.init({
                selector: '.texteditor',

                height: 200,
                setup: function(editor) {
                    editor.on('init change', function() {
                        editor.save();
                    });
                },

                directionality: 'rtl',
                language: '{{ $version->code }}',
            });
        </script>
    @else
        <script type="text/javascript">
            "use strict";
            tinymce.init({
                selector: '.texteditor',

                height: 200,
                setup: function(editor) {
                    editor.on('init change', function() {
                        editor.save();
                    });
                },

                directionality: 'ltr',
                language: '{{ $version->code }}',
            });
        </script>
    @endif
</body>

</html>
