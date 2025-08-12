<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description=" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="{{ asset('web/images/favicon.ico') }}">
    <title>Welcome to the Official Website of Maulana Mazharul Haque Arabic and
        Persian University, Patna :: Home Page</title>
    <link rel="stylesheet" href="{{ asset('web/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/magnific-popup.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/nice-select.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/jquery-ui.css') }} ">
    <link rel="stylesheet" href="{{ asset('web/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/teams.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>

<body>
    <header id="header" id="home">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 header-top-right no-padding">
                        <a href="https://mmhapu.ac.in/page/admission-2023-24">Admission <img
                                src="{{ asset('web/images/new.gif') }}" /></a>&nbsp;|&nbsp;
                        @foreach (App\Models\Topbar::all() as $topbar)
                            <a href="{{ url($topbar->url) }}"> {{ $topbar->title }} </a> &nbsp;|&nbsp;
                        @endforeach
                        <a href="https://www.mmhapu.ac.in/" target="_blank">Old Website</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo_part">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div id="logo">
                            <a href="https://mmhapu.ac.in/">
                                <img class="rotate-image" src="{{ asset('web/images/logo.jpeg') }}"
                                    alt="rotate logo" />
                                <h4 class="text-logo orange-text"> मौलाना मज़हरुल हक़ अरबी एवं फ़ारसी विश्वविद्यालय</h4>
                                <br>
                                <img src="https://mmhapu.ac.in/web/media_path/1721394861_urdu_final.png" alt="rotate logo"
                                    style="width:300px;height:30px;margin-left:20px;margin-top:-3px;margin-bottom:3px;" /><br>
                                <h4 class="text-logo orange-text">MAULANA MAZHARUL HAQUE ARABIC & PERSIAN UNIVERSITY
                                </h4>
                                <h6 class="text-logo">A State University established by an Act of Bihar State
                                    Universities</h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-md-8 col-xs-12 plr5">
                            </div>
                            <div class="col-md-4 col-xs-12 plr5"style="margin-top:20px">
                                <img class="img-responsive gandhiji_img" src="{{ asset('web/images/aazadi.png') }}"
                                    alt="aazadi ka amrut mahotsav" title="aazadi ka amrut mahotsav" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="main-menu">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">

                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="active">
                                <a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"
                                        style="font-size:22px;"></i></a>
                            </li>

                            @foreach (App\Models\Menu::whereNull('menu_id')->whereNull('submenu_id')->orderBy('display_order')->get() as $menu)
                                @php
                                    $url = $menu->url . '*';
                                    $isRequest = Request::path() == $url ? 'current' : '';
                                @endphp
                                @if ($menu->childMenu->count() > 0)
                                    <li class=" menu-has-children {{ $isRequest }}" style="margin-left:20px">
                                        <a href="{{ url($menu->url) }}">{{ $menu->name }}</a>
                                        <ul class="dropdown">

                                            @foreach ($menu->childMenu as $childMenu)
                                                @if ($childMenu->submenu_id == null)
                                                    <li class="menu-has-children" style="margin-left:0px;">
                                                        <a href="{{ url($childMenu->url) }}"
                                                            style="padding-left:10px!important;">{{ $childMenu->name }}</a>
                                                        @if (count(App\Models\Menu::where('submenu_id', $childMenu->id)->orderBy('display_order')->get()) > 0)
                                                            <ul class="dropdown">
                                                                @foreach (App\Models\Menu::where('submenu_id', $childMenu->id)->orderBy('display_order')->get() as $subMenu)
                                                                    <li style="margin-left:0px;">
                                                                        <a href="{{ url($subMenu->url) }}"
                                                                            style="padding-left:10px!important;">{{ $subMenu->name }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li class="{{ $isRequest }}" style="margin-left:10px"><a
                                            href="{{ url($menu->url) }}">{{ $menu->name }}</a></li>
                                @endif
                            @endforeach
                            <li class="menu-has-children {{ Request::is('about*') ? 'current' : '' }}"
                                style="margin-left:10px"><a href="#">Notice</a>
                                <ul class="dropdown">
                                    @foreach (App\Models\NoticetypeModel::all() as $noticetype)
                                        <li style="margin-left:0px;">
                                            <a href="{{ route('web.noticeList', $noticetype->notice_type) }}"
                                                style="padding-left:10px!important;">{{ $noticetype->notice_type }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class=" menu-has-children {{ Request::is('contact*') ? 'current' : '' }}"
                                style="margin-left:20px"><a href="#">Contact Us</a>
                                <ul class="dropdown">
                                    <li style="margin-left:0px;">
                                        <a href="{{ route('contact_us') }}">Contact Us</a>
                                    </li>
                                    <li style="margin-left:0px;">
                                        <a href="{{ route('address') }}">Address</a>
                                    </li>
                                    <li style="margin-left:0px;">
                                        <a href="{{ route('howtoReach') }}">How to Reach</a>
                                    </li>
                                    {{-- <li style="margin-left:0px;">
                                        <a href="{{ route('contact_us') }}">Contact Us</a>
                                    </li>
                                    <li style="margin-left:0px;">
                                        <a href="{{ route('address') }}">Address</a>
                                    </li>
                                    <li style="margin-left:0px;">
                                        <a href="{{ route('howtoReach') }}">How to Reach</a>
                                    </li> --}}
                                </ul>
                            </li>
                            <li class="active">
                                <a href="https://online.mmhapu.ac.in/student/index.aspx">Login</a>
                            </li>

                        </ul>
                    </nav>
                    <!-- #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>
    <!-- #header -->
