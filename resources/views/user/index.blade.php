<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 9]><html class="ie9 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 10]><html class="ie10 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if !IE]><!-->
<!--<![endif]-->
<html>

<head>
    <title> العلوم العصرية للتدريب </title>
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
                <div class="error-detect">
                    <div class="container">
                        <div class="error text-center">
                            <h1 class="danger-l">اي كلام اي كلام اي كلام يا حسني اي كلام يا حسني اي كلام</h1>
                            <h1 class="message-l">اي كلام اي كلام اي كلام يا حسني اي كلام يا حسني اي كلام</h1>
                            <h1 class="success-l">اي كلام اي كلام اي كلام يا حسني اي كلام يا حسني اي كلام</h1>
                        </div>
                        <!-- /.error-danger -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.error-detect -->

                <div class="login-area">
                    <div class="container">
                        <div class="login-form col-md-6 col-xs-12 text-right pull-right">
                            <form action="{{route('login')}}" method="Post">
                            @csrf
                            <h1>تسجيل الدخول</h1>
                            <div class="login-item">
                                <input type="text" placeholder="إسم المستخدم" name="username">
                                @error('username')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                @enderror
                            </div>

                            <!-- /.login-item -->
                            <div class="login-item">
                                <input type="password" placeholder="كلمة السر" name="password">
                                @error('password')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                            <!-- /.login-item -->
                            <div class="login-item">
                                <label class="pull-right">
                                    <input type="checkbox">
                                    <span>تذكر كلمة السر دائماً</span>
                                </label>
                                <label class="pull-left ">
                                    <a  class="forget">هل نسيت كلمة المرور ؟</a>
                                </label>
                            </div>
                            <!-- /.login-item -->
                            <div class="login-item">
                                <input type="submit" value="دخول">
                            </div>
                            </form>
                            <!-- /.login-item -->
                        </div>
                        <!-- /.login-form -->

                        <div class="signup-form col-md-6 col-xs-12 text-right">
                            <h1>تسجيل عضوية جديدة</h1>
                            <p>اذا كنت مستخدم جديد لموقعنا فيمكنك ان تتصفح معظم الكورسات الموجودة الان امامك ولكن لن تستطيع الحصول علي معلومات الكورس او الاشتراك به الا اذا كنت تمتلك حساب لدينا لذلك تستطيع تسجيل حساب جديد من هنا </p>
                            <a href="{{route('register')}}">
                                <i class="fa fa-user-plus"></i> تسجيل عضوية
                            </a>
                        </div>
                        <!-- /.signup-form -->

                        <!-- =========================================================================================================================================== -->

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



                    <!-- /.modal -->

                        <!-- =========================================================================================================================================== -->

                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.login-area -->


                <div class="header-nav">
                    <div class="container">
                        <div class="nav-right col-md-8 col-xs-12 pull-right">
                            <div class="logo">
                                <a  title="العلوم العصرية للتدريب">
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
            <!-- /header -->

            <div class="search-box">
                <div class="container">
                    <div class="search-inner">
                        <h1 class="text-center">تستطيع من خلال موقعنا البحث  عن كل ما تريد من كورسات </h1>

                            <div class="form-item col-xs-12">
                                <div class="input-container col-md-10 col-xs-12 input-lft pull-right">
                                    <input type="text" placeholder="ابحث عن جميع الكورسات من هنا" name="name" class="name">
                                </div>
                                <!-- /.input-container -->

                                <!-- end btn-container -->
                                <div class="btn-container col-md-2">
                                    <button>
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                                <!-- end btn-container -->
                            </div>
                            <!-- /.form-item -->
                            <!-- /.form-advanced -->

                    </div>
                    <!-- /.search-inner -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.search-box -->

            <div class="container">
                <div class="courses-head text-center">
                    <h1>أحدث الكورسات</h1>
                </div>
                <!-- /.testominal-head -->
                <div class="row block-container" id="course_list">

                    @foreach($paginate_courses as $course)
                        <div class="block col-md-4 course" id="show_course">
                            <figure>
                                <div><img src="/storage/{{$course->img}}" alt="img05" class="img-responsive"></div>
                                <figcaption class="text-right">
                                    <h1> اسم الكورس  :   <span>{{$course->name}}</span></h1>
                                    <h1>اسم المدرس  :   <span>{{$course->user->name}}</span></h1>
                                    <h1>عدد الطلبة المشتركة  :   <span>{{$course->user_sup->count()}}</span></h1>
                                    <h1>تاريخ بداية الكورس  :   <span>{{\Carbon\Carbon::parse($course->created_at)->translatedFormat('l j F Y ')}}</span></h1>
                                    @if(count($course->rate) > 0 )
                                        @if(count($course->rate->where('rate','=','5'))  >= count($course->rate->where('rate','=','4')) && count($course->rate->where('rate','=','5'))  >= count($course->rate->where('rate','=','3')) &&count($course->rate->where('rate','=','5'))  >= count($course->rate->where('rate','=','2')) && count($course->rate->where('rate','=','5'))  >= count($course->rate->where('rate','=','1')) )
                                            <h1> تقييم الكورس : <span>امتياز</span></h1>  </h1>
                                        @elseif(count($course->rate->where('rate','=','4'))  >= count($course->rate->where('rate','=','3')) && count($course->rate->where('rate','=','4'))  >= count($course->rate->where('rate','=','2')) && count($course->rate->where('rate','=','4'))  >= count($course->rate->where('rate','=','1')))
                                            <h1> تقييم الكورس : <span>جيد جدا</span></h1>  </h1>

                                        @elseif(count($course->rate->where('rate','=','3'))  >= count($course->rate->where('rate','=','2')) && count($course->rate->where('rate','=','3'))  >= count($course->rate->where('rate','=','1')))
                                            <h1> تقييم الكورس : <span>جيد </span></h1>  </h1>
                                        @elseif(count($course->rate->where('rate','=','2'))  >= count($course->rate->where('rate','=','1')))
                                            <h1> تقييم الكورس : <span>ضعيف </span></h1>  </h1>

                                        @else
                                            <h1> تقييم الكورس : <span>لايوجد تقيم</span></h1>  </h1>
                                        @endif
                                    @else
                                        <h1> تقييم الكورس : <span>لايوجد تقيم</span></h1>  </h1>
                                    @endif
@if(Auth::check())
                                        <a href="{{route('user.courses.show',$course->id)}}">
                                            <i class="fa fa-eye"></i> اشتراك ف الكورس
                                        </a>
                                    @else
                                        <a href="{{route('register')}}">
                                            <i class="fa fa-eye"></i>انشاء تسجيل
                                        </a>
                                    @endif
                                </figcaption>
                            </figure>
                        </div>


                @endforeach


                <!-- /.block -->


                </div>
                <div class="allcourses-body">
                    <div class="container">
                        <div class="row">
                            <div class="row block-container " id="name_list" style="display: none">


                                <!-- /.block -->



                            </div>
                            <!-- /.row -->
                        </div>

                        <!-- /.row -->

                        <!-- end inner -->

                    </div>
                    <!-- /.container -->
                </div>

                <!-- /.row -->
@if(count($paginate_courses) > 0)
                <div class="all-courses text-center">
                    <a href="{{route('user.courses.index')}}">عرض جميع الكورسات</a>
                </div>
            @endif
                <!-- /.all-courses -->

            </div>
            <!-- /.conainer -->
        </div>
        <!-- /.courses -->

        <div class="testominal">
            <div class="overlay"></div>
            <div class="container">
                <div class="testo-head text-center">
                    <h1>قالوا عنا</h1>
                </div>
                <!-- /.testominal-head -->
                <div class="testo-slider text-center">
                    <div class="testo-item col-xs-12">

                        <p>مستمداً ثروة الجامعات العلمية، وفضاء الإنترنت في تجاوز عقبات الزمان والمكان، أُعلن أخيرا ً عن انطلاق موقع على الإنترنت يتيح لمرتاديه دراسة موضوعات مختلفة في دورات قصيرة بطريقة تفاعلية، أملاً في إثراء المحتوى العربي على الإنترنت وسعياً لنشر المعرفة في المجتمعات العربية.</p>
                        <div class="testo-img">
                            <img src="/Theme/images/comment-02.jpg" alt="" class="img-responsive">
                        </div>
                        <!-- /.testo-img -->
                        <h1>امير ناجح</h1>
                        <!-- /.testo-img -->
                    </div>
                    <!-- /.testo-item -->
                    <div class="testo-item col-xs-12">

                        <p>مستمداً ثروة الجامعات العلمية، وفضاء الإنترنت في تجاوز عقبات الزمان والمكان، أُعلن أخيرا ً عن انطلاق موقع على الإنترنت يتيح لمرتاديه دراسة موضوعات مختلفة في دورات قصيرة بطريقة تفاعلية، أملاً في إثراء المحتوى العربي على الإنترنت وسعياً لنشر المعرفة في المجتمعات العربية.</p>
                        <div class="testo-img">
                            <img src="/Theme/images/comment-02.jpg" alt="" class="img-responsive">
                        </div>
                        <!-- /.testo-img -->
                        <h1>امير ناجح</h1>
                        <!-- /.testo-img -->
                    </div>
                    <!-- /.testo-item -->

                    <div class="testo-item col-xs-12">

                        <p>مستمداً ثروة الجامعات العلمية، وفضاء الإنترنت في تجاوز عقبات الزمان والمكان، أُعلن أخيرا ً عن انطلاق موقع على الإنترنت يتيح لمرتاديه دراسة موضوعات مختلفة في دورات قصيرة بطريقة تفاعلية، أملاً في إثراء المحتوى العربي على الإنترنت وسعياً لنشر المعرفة في المجتمعات العربية.</p>
                        <div class="testo-img">
                            <img src="/Theme/images/comment-02.jpg" alt="" class="img-responsive">
                        </div>
                        <!-- /.testo-img -->
                        <h1>امير ناجح</h1>
                        <!-- /.testo-img -->
                    </div>
                    <!-- /.testo-item -->

                    <div class="testo-item col-xs-12">

                        <p>مستمداً ثروة الجامعات العلمية، وفضاء الإنترنت في تجاوز عقبات الزمان والمكان، أُعلن أخيرا ً عن انطلاق موقع على الإنترنت يتيح لمرتاديه دراسة موضوعات مختلفة في دورات قصيرة بطريقة تفاعلية، أملاً في إثراء المحتوى العربي على الإنترنت وسعياً لنشر المعرفة في المجتمعات العربية.</p>
                        <div class="testo-img">
                            <img src="/Theme/images/comment-02.jpg" alt="" class="img-responsive">
                        </div>
                        <!-- /.testo-img -->
                        <h1>امير ناجح</h1>
                        <!-- /.testo-img -->
                    </div>
                    <!-- /.testo-item -->
                </div>
                <!-- /. testo-slider -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.testominal -->

        <footer>
            <div class="container">
                <div class="footer-sub col-md-2 col-xs-12 text-center pull-right">
                    <ul>
                        <li>
                            <a href="/Theme/about-us.html">من نحن</a>
                        </li>

                        <li>
                            <a href="/Theme/contact-us.html">إتصل بنا</a>
                        </li>
                    </ul>
                </div>
                <!-- end footer-sub -->
                <div class="copyrights col-md-8 col-xs-12 text-center pull-right">
                    <p>حميع الحقوق محفوظة لدي العلوم العصرية للتدريب</p>
                </div>
                <!-- /.copyrights -->
                <div class="footer-links col-md-2 col-xs-12 pull-left text-center">
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
</div>
<!-- /.wrapper -->

<div class="toTop col-xs-12 text-center">
    <i class="fa fa-angle-up"></i>
</div>
<!-- /.toTop -->


<!-- Javascript Files -->
<script src="/Theme/js/jquery-2.2.2.min.js" type="text/javascript"></script>
<script src="/Theme/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Theme/js/html5shiv.min.js" type="text/javascript"></script>
<script src="/Theme/js/jquery-smoothscroll.js" type="text/javascript"></script>
<script src="/Theme/js/modernizr.min.js" type="text/javascript"></script>
<script src="/Theme/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="/Theme/js/wow.min.js" type="text/javascript"></script>
<script src="/Theme/js/placeholdem.min.js" type="text/javascript"></script>
<script src="/Theme/js/toucheffects.js"></script>
<script src="/Theme/js/jquery.selectric.min.js" type="text/javascript"></script>
<script src="/Theme/js/classie.js" type="text/javascript"></script>
<script src="/Theme/js/jquery.nicescroll.min.js" type="text/javascript"></script>
<script src="/Theme/js/script.js" type="text/javascript"></script>
<script type="text/javascript">
    $('.name').on('keyup',function() {
        var query = $(this).val();
        $.ajax({

            url:"{{ route('search.name') }}",

            type:"GET",

            data:{'name':query},

            success:function (data) {
                if ( query !== '' ){
                    $('#course_list').css('display','none')
                    $('#name_list').css('display','block')

                    $('#name_list').html(data);

                }else {
                    $('#course_list').css('display','block')

                    $('#name_list').css('display','none')

                }


            }
        })
        // end of ajax call
    });


</script>
</body>

</html>
