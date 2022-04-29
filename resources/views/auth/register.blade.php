<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 9]><html class="ie9 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 10]><html class="ie10 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if !IE]><!-->
<!--<![endif]-->
<html>

<head>
    <title> العلوم العصرية للتدريب | تسجيل حساب جديد </title>
    <meta name="author" content="Amir Nageh">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <!-- Css Files -->
    <link href="/Theme/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/selectric.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/style.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/reset.css" rel="stylesheet" type="text/css">
    <link href="/Theme/images/favicon.png" rel="icon" type="text/css">
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

        <!-- /.st-effect-8 nav -->


        <div class="st-content">

            <!-- /.st-trigger -->


            <header>

                <div class="signup-area">
                    <div class="container">
                        <form action="{{route('login')}}" method="Post">
                            @csrf
                        <div class="login-form col-md-6 col-xs-12 text-right pull-right">
                            <h1>تسجيل الدخول</h1>
                            <div class="login-item">
                                <input type="text" placeholder="إسم المستخدم" name="username">
                            </div>
                            <!-- /.login-item -->
                            <div class="login-item">
                                <input type="password" placeholder="كلمة السر" name="password">
                            </div>
                            <!-- /.login-item -->
                            <div class="login-item">
                                <label class="pull-right">
                                    <input type="checkbox">
                                    <span>تذكر كلمة السر دائماً</span>
                                </label>
                                <label class="pull-left">
                                    <a href="/Theme/#" class="forget">هل نسيت كلمة المرور ؟</a>
                                </label>
                            </div>
                            <!-- /.login-item -->
                            <div class="login-item">
                                <input type="submit" value="دخول">
                            </div>
                            <!-- /.login-item -->
                        </div>
                        </form>
                        <!-- /.login-form -->

                        <div class="signup-form col-md-6 col-xs-12 text-right" style="display: none;">
                            <h1>تسجيل عضوية جديدة</h1>
                            <p>اذا كنت مستخدم جديد لموقعنا فيمكنك ان تتصفح معظم الكورسات الموجودة الان امامك ولكن لن تستطيع الحصول علي معلومات الكورس او الاشتراك به الا اذا كنت تمتلك حساب لدينا لذلك تستطيع تسجيل حساب جديد من هنا </p>
                            <a href="/Theme/#">
                                <i class="fa fa-user-plus"></i> تسجيل عضوية
                            </a>
                        </div>
                        <!-- /.signup-form -->



                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.login-area -->

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

                <div class="header-nav">
                    <div class="container">
                        <div class="nav-right col-md-8 col-xs-12 pull-right">
                            <div class="logo">
                                <a href="{{route('user_login')}}" title="العلوم العصرية للتدريب">
                                    <img src="/Theme/images/logo.png" alt="site-logo" width="110" height="70">
                                </a>
                            </div>
                            <!-- /.logo -->
                        </div>
                        <!-- /.nav-logo -->
                        <div class="nav-left col-md-4 col-xs-12 pull-left">
                            <div class="user-controls">
                                <ul>
                                    <li>
                                        <a  class="show-login">
                                            <i class="fa fa-user"></i> منطقة تسجيل الدخول
                                        </a>
                                    </li>
                                    <!--
                            <li>
<a href="/Theme/#">
    <i class="fa fa-user-plus"></i> تسجيل عضوية
</a>
</li>
-->
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
        {!! Form::open(['route' => 'password.email' , 'method'=>'post']) !!}

        <!-- Modal content-->

            <div class="panel-pop modal forget-pop" id="forget">


                <div class="lost-inner">
                    <h1>هل نسيت كلمة المرور ؟</h1>
                    <div class="lost-item">
                        <input type="email" placeholder="الايميل المستخدم في تسجيل الدخول" name="email" required>
                    </div>
                    <!-- /.lost-item -->
                    <div class="text-center ">
                        <input type="submit" value="إعادة ضبط">
                        <input id="cancel" type="submit" value="الغاء">

                    </div>
                    <!-- /.lost-item -->

                </div>
            </div>




        {!! Form::close() !!}
            <!-- /header -->

            <div class="up-container">
                <div class="up-header text-center">
                    <div class="container">
                        <h1>يرجي تسجيل حساب جديد</h1>
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.up-header -->
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="up-box">
                    <div class="container">
                        <div class="up-form">

                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <div class="up_form-item">
                                    <span id="error-form">من فضلك ادخل البيانات الصحيحة</span>
                                    <input type="text" placeholder="الإسم بالكامل" name="name">
                                </div>
                                @error('name')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                            @enderror
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <input type="text" placeholder="إسم المستخدم" name="username">
                                </div>
                                @error('username')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                            @enderror
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <input type="email" placeholder="البريد الإلكتروني" name="email">
                                </div>
                                @error('email')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                            @enderror
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <input type="password" placeholder="كلمة المرور" name="password">
                                </div>
                                @error('password')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                            @enderror
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <input type="password" placeholder="إعادة كلمة المرور" name="password_confirmation" >
                                </div>
                                @error('password')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                            @enderror
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <input type="text" placeholder="رقم الهاتف" name="phone">
                                </div>
                                @error('phone')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                            @enderror
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <select class="form-control" name="city_id">
                                        <option selected disabled>Select Your City</option>
                                        @foreach ($countries as $country)

                                            <option value="{{$country->id}}">{{$country->name}} - {{$country->code}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                @error('city_id')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                            @enderror

                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <select name="gender">
                                        <option>الجنس ...</option>
                                        <option value="male">مذكر</option>
                                        <option value="female">مؤنث</option>
                                    </select>
                                </div>
                                @error('gender')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                @enderror
                                <div class="up_form-item">
                                    <select name="role">
                                        <option>نوع ...</option>
                                        <option value="instructor">مدرب</option>
                                        <option value="Student">متدرب</option>
                                        <option value="both">كلاهما</option>

                                    </select>
                                </div>
                                @error('role')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                @enderror




                                <div class="policy text-right">
                                    <label class="text-right policy">
                                        <input type="checkbox" name="Privacy_policy" required>
                                        <span>هل انت موافق علي سياسة الخصوصية</span>
                                    </label>
                                </div>
                                @error('Privacy_policy')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                            @enderror
                                <!-- /.policy -->

                                <div class="up_form-item up-confirm">
                                    <input type="submit" value="تسجيل">
                                </div>
                                <!-- /.up_form-item -->
                            </form>

                        </div>
                        <!-- /.up-form -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.up-box -->
            </div>
            <!-- /.up-container -->

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
        <!-- /.st-content -->
    </div>
    <!-- /st-pusher -->

</div>
<!-- /.wrapper -->

<div class="toTop col-xs-12 text-center">
    <i class="fa fa-angle-up"></i>
</div>
<!-- /.toTop -->

<!-- =========================================================================================================================================== -->

<div class="panel-pop modal" id="forget">
    <div class="lost-inner">
        <h1>هل نسيت كلمة المرور ؟</h1>
        <div class="lost-item">
            <input type="text" placeholder="الايميل المستخدم في تسجيل الدخول">
        </div>
        <!-- /.lost-item -->
        <div class="text-center">
            <input type="submit" value="إعادة ضبط">
        </div>
        <!-- /.lost-item -->
    </div>
    <!-- /.lost-inner -->
</div>
<!-- /.modal -->

<!-- =========================================================================================================================================== -->

<!-- =========================================================================================================================================== -->

<div class="panel-pop modal" id="teacher-modal">
    <div class="lost-inner">
        <h1>
            <i class="fa fa-cube"></i> تعرف علي سياسة الخصوصية كمدرب
        </h1>
        <div class="lost-item">
            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
            </p>
        </div>
        <!-- /.lost-item -->

    </div>
    <!-- /.lost-inner -->
</div>
<!-- /.modal -->

<!-- =========================================================================================================================================== -->


<!-- Javascript Files -->
<script src="/Theme/js/jquery-2.2.2.min.js" type="text/javascript"></script>
<script src="/Theme/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Theme/js/html5shiv.min.js" type="text/javascript"></script>
<script src="/Theme/js/jquery-smoothscroll.js" type="text/javascript"></script>
<script src="/Theme/js/modernizr.min.js" type="text/javascript"></script>
<script src="/Theme/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="/Theme/js/wow.min.js" type="text/javascript"></script>
<script src="/Theme/js/toucheffects.js"></script>
<script src="/Theme/js/jquery.selectric.min.js" type="text/javascript"></script>
<script src="/Theme/js/classie.js" type="text/javascript"></script>
<script src="/Theme/js/jquery.nicescroll.min.js" type="text/javascript"></script>
<script src="/Theme/js/script.js" type="text/javascript"></script>
</body>

</html>
