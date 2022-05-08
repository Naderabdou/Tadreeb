<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 9]><html class="ie9 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 10]><html class="ie10 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if !IE]><!-->
<!--<![endif]-->
<html>

<head>
    <title>جميع الكورسات</title>
    <meta name="author" content="Amir Nageh">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="user_id" content="{{ auth()->user()->id }}">
    <meta name="time" content="{{now()}}">

    <meta charset="utf-8">
    <link href="/Theme/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/bootstrap.vertical-tabs.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/style.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/reset.css" rel="stylesheet" type="text/css">
    <link href="/Theme/images/favicon.png" rel="icon" type="text/css">

    <!-- Css Files -->
    <link href="/Theme/css/selectric.css" rel="stylesheet" type="text/css">

    @yield('css')
</head>

<body>

<!-- start the loading screen -->

<div class="wrap">
    <div class="loading">
        <div class="bounceball"></div>
        <div class="text">NOW LOADING</div>
    </div>
</div>

<!-- end the loading screen -->

<div class="wrapper st-container" id="st-container">
    <!-- content push wrapper -->
    <div class="st-pusher">




        <div class="st-content">
            <div class="dividers">
                <span class="t1"></span>
                <span class="t2"></span>
                <span class="t3"></span>
                <span class="t4"></span>
                <span class="t5"></span>
                <span class="t1"></span>
                <span class="t2"></span>
                <span class="t3"></span>
                <span class="t4"></span>
                <span class="t5"></span>
            </div>
            <!-- /.dividers -->







            <header>



                <div class="header-nav">
                    <div class="container">
                        <div class="nav-right col-md-8 col-xs-12 pull-right">
                            <div class="logo">
                                <a href="{{route('user.dashboard.index')}}" title="العلوم العصرية للتدريب">
                                    <img src="/Theme/images/logo.png" alt="site-logo" width="110" height="70">
                                </a>
                            </div>
                            <!-- /.logo -->
                        </div>
                        <!-- /.nav-logo -->
                        <div class="nav-left hidden-nav col-md-4 col-xs-12 pull-left">
                            <div class="user-logged">
                                <ul>
                                    <li>
                                        <a href="/Theme/#" class="dropdown-toggle" data-toggle="dropdown" class="hvr-underline-reveal">
                                            @if(!auth()->user()->img==null)


                                                <span class="cont-img">

                                    <img src="/storage/{{auth()->user()->img}}" width="35" height="35" alt="User-Img">
                                </span>
                                            @else
                                                <span class="cont-img">

                                    <img  src="/Theme/images/avatar5.png"  width="35" height="35" alt="User-Img">
                                </span>
                                            @endif





                                            <b>{{auth()->user()->name}}</b>
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                            <div class="drop drop-links col-xs-12">
                                                <div class="drop-links">
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('user.profile')}}">
                                                                <i class="fa fa-user"></i>&nbsp; حسابي
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('logout')}}">
                                                                <i class="fa fa-power-off"></i>&nbsp; خروج
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- end drop-links -->
                                            </div>
                                            <!-- end drop -->
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <!-- /.user-controls -->
                        </div>
                        <!-- /.nav-user -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.header-nav -->
            </header>
            <!-- /header -->
            <!--  content -->
            @yield('content')
            <!-- /.allcourses-box -->

            <footer>
                <div class="container">
                    <div class="copyrights col-md-10 col-xs-12 text-center pull-right">
                        <p>حميع الحقوق محفوظة لدي العلوم العصرية للتدريب</p>
                    </div>
                    <!-- /.copyrights -->
                    <div class="footer-links col-md-2 col-xs-12 pull-left">
                        <ul>
                            <li>
                                <a href="/Theme/#" data-toggle="tooltip" data-placement="top" title="facebook">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                            </li>

                            <li>
                                <a href="/Theme/#" data-toggle="tooltip" data-placement="top" title="twitter">
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                            </li>

                            <li>
                                <a href="/Theme/#" data-toggle="tooltip" data-placement="top" title="linkedin">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.footer-links -->
                </div>
                <!-- /.container -->
            </footer>

        </div>
        <!-- /st-content -->
    </div>
    <!-- /st-pusher -->

</div>
<!-- /.wrapper -->

<div class="toTop col-xs-12 text-center">
    <i class="fa fa-angle-up"></i>
</div>
<!-- /.toTop -->

<script src="/Theme/js/jquery-2.2.2.min.js" type="text/javascript"></script>
<script src="/Theme/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Theme/js/html5shiv.min.js" type="text/javascript"></script>
<script src="/Theme/js/jquery-smoothscroll.js" type="text/javascript"></script>
<script src="/Theme/js/modernizr.min.js" type="text/javascript"></script>
<script src="/Theme/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="/Theme/js/wow.min.js" type="text/javascript"></script>
<script src="/Theme/js/placeholdem.min.js" type="text/javascript"></script>
<script src="/Theme/js/toucheffects.js" type="text/javascript"></script>
<script src="/Theme/js/jquery.nicescroll.min.js" type="text/javascript"></script>
<script src="/Theme/js/script.js" type="text/javascript"></script>
<!-- Javascript Files -->
<script src="/Theme/js/jquery.selectric.min.js" type="text/javascript"></script>
<script src="/Theme/js/classie.js" type="text/javascript"></script>


@yield('js')
</body>

</html>
