<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 9]><html class="ie9 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 10]><html class="ie10 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if !IE]><!-->
<!--<![endif]-->
<html>

<head>
    <title> الموقع </title>
    <meta name="author" content="Amir Nageh">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <!-- Css Files -->
    <link href="/Theme/css/selectric.css" rel="stylesheet" type="text/css">

    <link href="/Theme/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/bootstrap.vertical-tabs.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/style.css" rel="stylesheet" type="text/css">
    <link href="/Theme/css/reset.css" rel="stylesheet" type="text/css">
    <link href="/Theme/images/favicon.png" rel="icon" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker3.min.css" integrity="sha512-hqXYl9CoYMxIjFBLpbbcW8QhhAOTIBHbo4J5aHm/QkISuB/Qb/ew0LqG38p/i4kZftRs+FYFGd/4srg5x2wSog==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <script src="/Theme/js/jquery-2.2.2.min.js" type="text/javascript"></script>

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

<div class="wrapper">
    <header>
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
                <div class="nav-right user_nav-right col-md-6 col-xs-12 pull-right">

                    <div class="logo">
                        <a href="{{route('user.dashboard.index')}}" title="العلوم العصرية للتدريب">
                            <img src="/Theme/images/logo.png" alt="site-logo" width="110" height="70">
                        </a>
                    </div>
                    <!-- /.logo -->
                </div>
                <!-- /.nav-logo -->
                <div class="nav-left user_nav-left col-md-6 col-xs-12 pull-left">
                    <div class="user-logged">
                        <ul>
                            <li>
                                <a href="/Theme/#" class="dropdown-toggle" data-toggle="dropdown" class="hvr-underline-reveal">
                                   @if(!$user->img=='null')


                                        <span class="cont-img">

                                    <img  src="/Theme/images/avatar5.png"  width="35" height="35" alt="User-ImgJJ">
                                </span>
                                    @else
                                        <span class="cont-img">
                                    <img src="/storage/{{$user->img}}" width="35" height="35" alt="User-Img">
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
                                                    <a href="{{route('user.profile.show',auth()->user()->id)}}">
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
                            <li>
                                <a  class="show-user_search">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/Theme/#" class="show-notification" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell"></i>
                                </a>
                                <ul class="dropdown-menu notification-box" role="menu" aria-labelledby="dropdownMenu">
                                    <div class="drop drop-links col-xs-12">
                                        <ul>
                                            <li>
                                                <a href="/Theme/#">
                                                    <img src="/Theme/images/avatar5.png" alt="" class="img-circle pull-right">
                                                    <h4>
                                                        امير ناجح
                                                        <small><i class="fa fa-clock-o"></i>5 دقائق</small>
                                                    </h4>
                                                    <p> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/Theme/#">
                                                    <img src="/Theme/images/avatar04.png" alt="" class="img-circle pull-right">
                                                    <h4>
                                                        حسني اديب
                                                        <small><i class="fa fa-clock-o"></i>5 دقائق</small>
                                                    </h4>
                                                    <p> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/Theme/#">
                                                    <img src="/Theme/images/avatar3.png" alt="" class="img-circle pull-right">
                                                    <h4>
                                                        مني سلامة
                                                        <small><i class="fa fa-clock-o"></i>5 دقائق</small>
                                                    </h4>
                                                    <p> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/Theme/#">
                                                    <img src="/Theme/images/b3.jpg" alt="" class="img-circle pull-right">
                                                    <h4>
                                                        امير ناجح
                                                        <small><i class="fa fa-clock-o"></i>5 دقائق</small>
                                                    </h4>
                                                    <p> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/Theme/#">
                                                    <img src="/Theme/images/avatar04.png" alt="" class="img-circle pull-right">
                                                    <h4>
                                                        حسني اديب
                                                        <small><i class="fa fa-clock-o"></i>5 دقائق</small>
                                                    </h4>
                                                    <p> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/Theme/#">
                                                    <img src="/Theme/images/avatar3.png" alt="" class="img-circle pull-right">
                                                    <h4>
                                                        مني سلامة
                                                        <small><i class="fa fa-clock-o"></i>5 دقائق</small>
                                                    </h4>
                                                    <p> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                                                </a>
                                            </li>
                                        </ul>
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
            <div class="input-container user-search col-md-12 col-xs-12 input-lft">
                <div class="container">
                    <input type="text" placeholder="ابحث عن جميع الكورسات من هنا">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.input-container -->
        </div>
        <!-- /.header-nav -->

    </header>
    <!-- /header -->

    <div class="profile-content empty-course">
        <div class="container">
            <div class="right_tap-box col-md-3 col-xs-12 hidden-xs hidden-sm pull-right">
                <div class="right_box-inner">
                    <!-- Nav tabs -->
                    <a class="toggle-slidenav hidden-xs hidden-sm">
                        <i class="fa fa-close"></i>
                    </a>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">

                            <a href="/Theme/#home" aria-controls="home" role="tab" data-toggle="tab">
                                <i class="fa fa-user"></i> الملف الشخصي
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/Theme/#password" aria-controls="password" role="tab" data-toggle="tab">
                                <i class="fa fa-lock"></i> كلمة المرور
                            </a>
                        </li>
                        @if(auth()->user()->role=='instructor' || auth()->user()->role=='both' )
                        <li role="presentation">
                            <a href="/Theme/#courses" aria-controls="courses" role="tab" data-toggle="tab">
                                <i class="fa fa-database"></i> الدورات
                            </a>
                        </li>
                        @endif

                        <li role="presentation">
                            <a href="/Theme/#interests" aria-controls="interests" role="tab" data-toggle="tab">
                                <i class="fa fa-diamond"></i> الاهتمامات
                            </a>
                        </li>
@if(auth()->user()->role=='instructor' || auth()->user()->role=='both')
                        <li role="presentation">
                            <a href="/Theme/#cv" aria-controls="cv" role="tab" data-toggle="tab">
                                <i class="fa fa-file-text-o"></i> السيرة الذاتية
                            </a>
                        </li>
                        @endif
                        @if(auth()->user()->role=='Student'|| auth()->user()->role=='both')
                        <li role="presentation">
                            <a href="/Theme/#all-courses" aria-controls="all-courses" role="tab" data-toggle="tab">
                                <i class="fa fa-eye"></i> تصفح الدورات
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/Theme/#my_courses" aria-controls="my_courses" role="tab" data-toggle="tab">
                                <i class="fa fa-folder-open-o"></i> دوراتي كمتدرب
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="/Theme/#my_certf" aria-controls="my_certf" role="tab" data-toggle="tab">
                                <i class="fa fa-table"></i> شهاداتي كمتدرب
                            </a>
                        </li>
                        @endif

                    </ul>
                </div>
                <!-- /.right_box-inner -->
            </div>
            <!-- /.right_tap-box -->

            <div class="mobile_tap-box col-md-12 col-xs-12 hidden-lg text-center">
                <div class="right_box-inner">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">

                            <a href="/Theme/#home" aria-controls="home" role="tab" data-toggle="tab" title="الملف الشخصي">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/Theme/#password" aria-controls="password" role="tab" data-toggle="tab" title="كلمة المرور">
                                <i class="fa fa-lock"></i>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/Theme/#interests" aria-controls="interests" role="tab" data-toggle="tab" title="الاهتمامات">
                                <i class="fa fa-diamond"></i>
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="/Theme/#cv" aria-controls="cv" role="tab" data-toggle="tab" title="السيرة الذاتية">
                                <i class="fa fa-file-text-o"></i>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/Theme/#all-courses" aria-controls="all-courses" role="tab" data-toggle="tab" title="تصفح الدورات">
                                <i class="fa fa-eye"></i>
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="/Theme/#my_courses" aria-controls="my_courses" role="tab" data-toggle="tab" title="دوراتي كمتدرب">
                                <i class="fa fa-folder-open-o"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- /.right_box-inner -->
            </div>
            <!-- /.mobile_tap-box -->

            <div class="left_tap-box col-md-9 col-xs-12 pull-left">
                <div class="left_box-inner">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in  active" id="home">
                            <div class="home-head">
                                <h1>
                                    <i class="fa fa-user"></i>
                                    الملف الشخصي
                                    <a class="edit-personal">
                                        <button type="button" data-toggle="modal" data-target="#edit{{$user->id}}">                                        تعديل البيانات</button>

                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <button class="cancel-personal" type="reset">
                                        <i class="fa fa-times"></i>
                                        إلغاء التعديل
                                    </button>
                                </h1>
                            </div>
                            <!-- /.home-head -->

                            <div class="home_img  text-center">
                                <div class="home_img-inner">
                                    <div class="left-caption col-xs-12">
                                        <div class="imgcontent col-xs-12">
                                            <div class="bstext">
                                                    <span>
                                          <i class="fa fa-camera"></i><br>
                                          Upload an image
                                      </span>
                                            </div>
                                            <!-- /.bstext -->
                                            <output id="list"></output>
                                            <input type="file" id="show-adj8" name="myFileSelect">
                                        </div>
                                        <!-- /.imgcontent -->
                                    </div>
                                    <!-- /.Fption -->
                                    <img src="/storage/{{$user->img}}" alt="" width="150" height="150">
                                </div>
                            </div>
                            <!-- /.home_img -->
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="home-content">
                                <div id="edit{{$user->id}}" class="modal fade" role="dialog">

                                    {!! Form::model($user, ['route' => ['user.profile.update', $user->id],'class'=>'form-horizontal','method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

                                    @csrf

@include('user.profile.form')

                                    {!! Form::close() !!}

                                </div>





                                <div class="home_data col-md-10 col-sm-10 col-xs-12 text-right" >
                                        <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-user-secret"></i>
                                                <h1>الإسم بالكامل</h1>
                                                <span>{{$user->name}}</span>
                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->

                                        <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-user"></i>
                                                <h1>إسم المستخدم</h1>
                                                <span>{{$user->username}}</span>
                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->
                                        <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-phone"></i>
                                                <h1>رقم الهاتف</h1>
                                                <span>{{$user->phone}}</span>
                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->

                                        <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-envelope"></i>
                                                <h1>البريد الإلكتروني</h1>
                                                <span>{{$user->email}}</span>
                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->
                                        <div class="home_data-item col-md-6 col-sm-6  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-globe"></i>
                                                <h1>الدولة</h1>
                                                <span>{{$user->city->name}}</span>
                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->
                                        <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-male"></i>
                                                <h1>الجنس</h1>

                                                <span>{{$user->gender}}</span>
                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->
                                        <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-globe"></i>
                                                <h1>مدرب / متدرب</h1>
                                                <span>{{$user->role}}</span>
                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->

                                        <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-graduation-cap"></i>
                                                <h1> المؤهل</h1>
                                                <span>{{$user->qualification}}</span>
                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->

                                        <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-briefcase"></i>
                                                <h1>التخصص</h1>
                                                <span>{{$user->Specialization}}</span>
                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->

                                        <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-cogs"></i>
                                                <h1>مجال العمل</h1>

                                                <span>{{$user->Employment}} </span>
                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->

                                        <div class="home_data-item all-set col-md-12 col-sm-12  col-xs-12 pull-right">
                                            <input type="submit" class="confirm-set" value="حفظ التعديلات">
                                        </div>
                                        <!-- /.home_data-item -->

                                </div>
                                <!-- ./home_data -->
                            </div>
                            <!-- /.home-content -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="password">
                            <div class="home-head">
                                <h1>
                                    <i class="fa fa-lock"></i>
                                    كلمة المرور
                                </h1>
                                <a class="edit-password">
                                    <i class="fa fa-cog"></i> تعديل البيانات
                                </a>
                                <button class="cancel-password" type="reset">
                                    <i class="fa fa-times"></i> إلغاء التعديل
                                </button>
                            </div>
                            <!-- /.home-head -->
                            <div class="home-content pass-content col-xs-12">
                                <div class="home_data col-xs-12 pull-right text-right">
                                    <form method="POST" action="{{route('user.update.password')}}">
                                        @csrf


                                    <div class="home_data-item all-pass col-md-12  col-xs-12 pull-right">
                                        <div>
                                            <i class="fa fa-lock"></i>
                                            <h1>كلمة المرور القديمة</h1>
                                            <input type="password" id="edit-area " name="old_pass">
                                            @error('old_pass')
                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.home_data-item -->

                                    <div class="home_data-item all-pass col-md-12  col-xs-12 pull-right">
                                        <div>
                                            <i class="fa fa-lock"></i>
                                            <h1>كلمة المرور الجديدة</h1>
                                            <input type="password" id="edit-area " name="new_pass">
                                            @error('new_pass')
                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.home_data-item -->
                                    <div class="home_data-item all-pass col-md-12  col-xs-12 pull-right">
                                        <div>
                                            <i class="fa fa-lock"></i>
                                            <h1>كلمة المرور الجديدة</h1>
                                            <input type="password" id="edit-area " name="new_pass_confirmation">
                                            @error('new_pass_confirmation')
                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- /.home_data-item -->
                                    <div class="home_data-item all-pass col-md-12 col-sm-12  col-xs-12 pull-right">
                                        <input type="submit" value="حفظ التعديلات" class="confirm-set-password">
                                    </div>
                                    <!-- /.home_data-item -->
                                    </form>
                                </div>
                                <!-- ./home_data -->
                            </div>
                            <!-- /.home-content -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="courses">
                            <div class="home-head">
                                <h1>
                                    <i class="fa fa-database"></i>
                                    الدورات
                                </h1>
                                @if(auth()->user()->status === 'active')
                                <a class="add1_course" href="{{route('user.courses.create')}}">
                                    <i class="fa fa-plus"></i>إضافة دورة
                                </a>
                                @endif
                            </div>
                            <!-- /.home-head -->
                            <div class="home-content  pass-content col-xs-12">
                                <div class="home_data col-md-12 pull-right text-right">
                                    <div class="shop-wrapper col-xs-12">



                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                            @foreach($course as $courses)
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="button" role="tab" id="heading_{{$courses->id}}" role="button" data-toggle="collapse" data-parent="#accordion" href="/Theme/#collapse_{{$courses->id}}" aria-expanded="true" aria-controls="collapse_{{$courses->id}}">
                                                    <h4 class="panel-title">
                                                        <a>
                                                            <h5>
                                                                <i class="fa fa-group"></i> {{$courses->user_sup->count()}}
                                                            </h5>
                                                            {{$courses->name}}
                                                        </a>


                                                    </h4>
                                                </div>
                                                <div id="collapse_{{$courses->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_{{$courses->id}}">
                                                    <div class="panel-body">
                                                        <div class="instructor-control text-center">

                                                            <a href="{{route('user.delete.course',$courses->id)}}" class="delete-course">
                                                                <i class="fa fa-trash"></i> حذف الدورة
                                                            </a>


                                                            <a  class="add-course_{{$courses->id}}  "id="add-course">
                                                                <i class="fa fa-plus"></i> إضافة محاضرة
                                                            </a>
                                                            <a  class="edit-lessons_{{$courses->id}} edit-lessons" id="add-course">
                                                                <i class="fa fa-pencil"></i>تعديل او حذف المحاضرة
                                                            </a>

                                                            <a  class="message-course" id="message-{{$courses->id}}">
                                                                <i class="fa fa-envelope"></i> إرسال للجميع
                                                            </a>
                                                            <!-- =========================================================================================================================================== -->

                                                            <div class="panel-pop modal message-course_pop" id="msg_all_{{$courses->id}}">
                                                                <div class="lost-inner">
                                                                    <h1>
                                                                        <i class="fa fa-envelope"></i>
                                                                        إرسال لجميع الطلاب المشتركين في الدورة
                                                                        <a style="cursor: pointer; position: absolute; left: 10px; background-color: black" onclick="deletealert()">
                                                                            x
                                                                        </a>
                                                                    </h1>
                                                                    <form action="{{route('user.message')}}" method="post">
                                                                        @csrf
                                                                        <div class="lost-item" id="messageTo">
                                                                            <textarea name="massage" placeholder="اكتب الرسالة هنا"></textarea>
                                                                            <input type="hidden" value="{{$courses->id}}" name="course_id">
                                                                        </div>

                                                                        <!-- /.lost-item -->
                                                                        <div class="text-center">
                                                                            <input type="submit" value="إرسال">
                                                                        </div>
                                                                    </form>
                                                                    <!-- /.lost-item -->
                                                                </div>
                                                                <!-- /.lost-inner -->
                                                            </div>
                                                            <!-- /.modal -->
                                                            <div class="panel-pop modal delete-course_pop" id="delete-all">
                                                                <div class="lost-inner">
                                                                    <form action="{{route('user.courses.destroy',$courses->id)}}" method="POST">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <p>هل تريد حذف هذه الدورة</p>
                                                                        <div class="text-center">
                                                                            <input type="submit" value="مسح">
                                                                        </div>
                                                                   </form>
                                                                    <!-- /.lost-item -->
                                                                </div>
                                                                <!-- /.lost-inner -->
                                                            </div>


                                                            <!-- =========================================================================================================================================== -->
                                                            <a  class="edit-course_{{$courses->id}} " id="edit-course">
                                                                <i class="fa fa-pencil"></i> تعديل الدورة
                                                            </a>
                                                            <a  class="add-exam_{{$courses->id}} add-exam">
                                                                <i class="fa fa-pencil"></i> أصافة امتحان
                                                            </a>
                                                            <a  class="edit-exam_{{$courses->id}} edit-exam">
                                                                <i class="fa fa-pencil"></i> تعديل الامتحان
                                                            </a>

                                                            <a  class="add-alert-form add-alert" id="alert-form-{{$courses->id}}">
                                                                <i class="fa fa-bullhorn"></i> إضافة تنويه
                                                            </a>
                                                            <a  class="edit-alert_{{$courses->id}} add-alert">
                                                                <i class="fa fa-pencil"></i> تعديل التنويه
                                                            </a>

                                                            <!-- =========================================================================================================================================== -->
                                                                <div class="panel-pop modal alert_form " id="alert_form_{{$courses->id}}" >
                                                                    <form action="{{route('user.alerts.store')}}" method="Post">
                                                                        @csrf
                                                                        <div class="lost-inner">
                                                                          <a style="cursor: pointer; position: absolute; left: 10px; background-color: black" onclick="deletealert()">
                                                                             x
                                                                          </a>

                                                                            <h1>
                                                                                <i class="fa fa-envelope"></i>
                                                                                اضافة تنويه للطلاب المشتركين في الدورة

                                                                            </h1>
                                                                            <div class="lost-item" id="alert-item">
                                                                                <input type="text" placeholder="عنوان التنويه" name="title">
                                                                            </div>
                                                                            <!-- /.lost-item -->
                                                                            <div class="lost-item" id="alert-item">
                                                                                <textarea name="body" placeholder="مضمون التنويه"></textarea>
                                                                            </div>
                                                                            <div>
                                                                                <input name="course_id" type="hidden" value="{{$courses->id}}">

                                                                                <input name="instructor_id" type="hidden" value="{{auth()->user()->id}}">
                                                                            </div>
                                                                            <!-- /.lost-item -->
                                                                            <div class="text-center">
                                                                                <input type="submit" value="نشر التنويه">
                                                                            </div>
                                                                            <!-- /.lost-item -->
                                                                        </div>

                                                                    </form>
                                                                    <!-- /.lost-inner -->
                                                                </div>

                                                            <!-- /.modal -->


                                                            <!-- =========================================================================================================================================== -->
                                                            <div class="add_lecture    add_lecture_{{$courses->id}}">
                                                                <form action="{{route('user.lessons.store')}}" method="post" enctype="multipart/form-data">
                                                                    <!-- /. اسم الدرس  -->
                                                                    @csrf
                                                                    <div class="lecture-item">
                                                                        <h1>اسم الدرس</h1>
                                                                        {!! Form::text('lesson_name',null,['placeholder'=>'اضف اسم الدرس']) !!}
                                                                        <input type="hidden" name="course_id" value="{{$courses->id}}">
                                                                        @error('lesson_name')
                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                        @enderror
                                                                    </div>
                                                                    <!-- ///// -->


                                                                    <!--وصف المحاضرة -->
                                                                    <div class="lecture-item">
                                                                        <h1>وصف المحاضرة</h1>
                                                                        {!! Form::textarea('lesson_desc',null,['placeholder'=>'اضف وصف المحاضرة','rows'=> '1','col'=>'1' ]) !!}
                                                                        @error('lesson_desc')
                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                        @enderror
                                                                    </div>
                                                                    <!--////// -->

                                                                    <!-- /.lecture-item -->
                                                                    <div class="lecture-item">
                                                                        <h1>اضف رابط خارجي للفيديو</h1>
                                                                        <div class="add_cont text-right">
                                                                            <label class="text-right">
                                                                                <input type="checkbox" class="video_check" onclick="lesson()">
                                                                                <span>اذا أردت رفع فيديو من جهازك الشخصي</span>
                                                                            </label>


                                                                            <div class="videoUploaded col-xs-12 text-right video_lesson" >
                                                                                <span><i class="fa fa-video-camera"></i> ارفع فيديو من جهازك</span>
                                                                                <input type="file" class="uploaded" name="video">
                                                                            </div>
                                                                            @error('video')
                                                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                        @enderror
                                                                        <!--
                                                                            <label class="text-right">
                                                                                <input type="radio" id="add-link">
                                                                                <span>يوتيوب</span>
                                                                            </label>
-->
                                                                        </div>
                                                                        <input type="text" placeholder="ادخل رابط فيديو" class="lesson_linked" name="video_link">
                                                                        @error('video_link')
                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                        @enderror
                                                                    </div>
                                                                    <!-- /.lecture-item -->

                                                                    <div class="lecture-item">
                                                                        <h1>اضف رابط خارجي للأوراق العمل</h1>
                                                                        <div class="add_cont text-right">
                                                                            <label class="text-right">
                                                                                <input type="checkbox" class="up_peper" onclick="peper()" >
                                                                                <span>اذا أردت رفع أوراق العمل من جهازك الشخصي</span>
                                                                            </label>

                                                                            <div class="videoUploaded col-xs-12 text-right peper peper_lesson">
                                                                                <span><i class="fa fa-video-camera"></i> ارفع أوراق العمل من جهازك</span>
                                                                                <input type="file" class="uploaded" name="paperwork">
                                                                            </div>
                                                                            @error('paperwork')
                                                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                        @enderror

                                                                        <!--
                                                                            <label class="text-right">
                                                                                <input type="radio" id="add-link">
                                                                                <span>يوتيوب</span>
                                                                            </label>
-->
                                                                        </div>
                                                                        <input type="text" placeholder="ادخل رابط فيديو" class="linked pepper_linked" name="paperwork_link">
                                                                        @error('paperwork_link')
                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                        @enderror
                                                                        <span class="hint"> Image او Word او Powerpoint او Pdf الملفات يمكن ان تكون </span>

                                                                    </div>

                                                                    <!-- /.lecture-item -->
                                                                    <!-- /.lecture-item -->
                                                                    <div class="lecture-item add-sorting">
                                                                        <label>
                                                                            <input type="checkbox" id="sort-lesson">
                                                                            <span>يجب تحديد ترتيب الدرس </span>
                                                                            <input type="number" data-toggle="tooltip" data-placement="top" title="اكتب ترتيب الدرس بالأرقام" class="add_sort-number" name="order">
                                                                            @error('order')
                                                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                            @enderror
                                                                        </label>
                                                                    </div>

                                                                    <!-- /.lecture-item -->
                                                                    <div class="lecture-item confirm-lec">
                                                                        <input type="submit" value="إضافة محاضرة">
                                                                    </div>
                                                                    <!-- /.lecture-item -->

                                                                </form>
                                                            </div>
                                                            <div class="add_lecture   add_exam_{{$courses->id}} add_exam">
                                                                <div class="add_lecture in-one">
                                                                    <form action="{{route('user.exam.store')}}" method="POST">
                                                                        @csrf
                                                                        <div class="lecture-item">
                                                                            <h1>اضف السؤال</h1>
                                                                            <textarea name="question"  placeholder="اكتب سؤالك هنا"></textarea>
                                                                            @error('question')
                                                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <!-- end lecture-item -->

                                                                        <div class="lecture-item">
                                                                            <h1>يجب عليك اختيار اجابة صحيحة واحده</h1>
                                                                            <ul>
                                                                                <li>
                                                                                    <a class="btn active btn-danger" id="a">
                                                                                        <input  type="hidden"  name="type[]" value="Wrong" >
                                                                                        Wrong

                                                                                        <input  type="checkbox" onclick="exam(this)" name="type[]" value="Wrong">
                                                                                        @error('type')
                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                        @enderror

                                                                                    </a>
                                                                                    <input type="text" placeholder="اكتب الاجابة الاولي" name="answer[]">
                                                                                    @error('answer')
                                                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                    @enderror

                                                                                </li>
                                                                                <li>
                                                                                    <a class="btn active btn-danger" id="b">
                                                                                        <input  type="hidden"  name="type[]" value="Wrong" >
                                                                                        Wrong
                                                                                        <input  type="checkbox" onclick="exam(this)" name="type" value="Wrong">
                                                                                        @error('type')
                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                        @enderror

                                                                                    </a>
                                                                                    <input type="text" placeholder="اكتب الاجابة الثانية" name="answer[]">
                                                                                    @error('answer')
                                                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                    @enderror
                                                                                </li>
                                                                                <li>
                                                                                    <a class="btn active btn-danger" id="c">
                                                                                        <input  type="hidden"  name="type[]" value="Wrong" >
                                                                                        Wrong
                                                                                        <input  type="checkbox" onclick="exam(this)" name="type" value="Wrong">
                                                                                        @error('type')
                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                        @enderror

                                                                                    </a>
                                                                                    <input type="text"  placeholder="اكتب الاجابة الثالثة" name="answer[]">
                                                                                    @error('answer')
                                                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                    @enderror
                                                                                </li>
                                                                                <li>
                                                                                    <a class="btn active btn-danger" id="d">
                                                                                        <input  type="hidden"  name="type[]" value="Wrong" >
                                                                                        Wrong
                                                                                        <input  type="checkbox" onclick="exam(this)" name="type" value="Wrong">
                                                                                        @error('type')
                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                        @enderror

                                                                                    </a>
                                                                                    <input type="text" placeholder="اكتب الاجابة الاخيرة" name="answer[]">
                                                                                    @error('answer')
                                                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                    @enderror
                                                                                </li>

                                                                            </ul>
                                                                            <input type="hidden" name="course_id" value="{{$courses->id}}">
                                                                            <input type="hidden" name="instructor_id" value="{{auth()->user()->id}}">

                                                                        </div>
                                                                        <!-- end lecture-item -->
                                                                        <div class="lecture-item confirm-lec">
                                                                            <input type="submit" value="نشر الاختبار">
                                                                        </div>
                                                                        <!-- end lecture-item -->
                                                                    </form>
                                                                </div>
                                                            </div>




                                                            <div class="add_lecture   edit_exam_{{$courses->id}} edit_exam">
                                                                @foreach($courses->questions as $questions)

                                                                <a  class="edit-questions_{{$questions->id}}  " id="add-n">
                                                                        <i class="fa fa-edit"></i> {{$questions->question}}

                                                                </a>

                                                                     <a style="color: black; background-color:burlywood;  border-radius: 10px ; margin: auto ; cursor: pointer" href="{{route('user.delete.exam',$questions->id)}}">
                                                                         <i class="fa fa-trash"></i>
                                                                     </a>







                                                                @endforeach




                                                                    @foreach($courses->questions as $questions)

                                                                <div class="add_lecture   edit_questions_{{$questions->id}} add_exam">
                                                                        <div class="add_lecture in-one">
                                                                            {!! Form::model($questions, ['route' => ['user.exam.update',$questions->id],'class'=>'form-horizontal','method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

                                                                            @csrf
                                                                            <div class="lecture-item">
                                                                                <h1>اضف السؤال</h1>
                                                                                {!! Form::textarea('question',null,['placeholder'=>'اكتب سؤالك هنا']) !!}
                                                                                @error('question')
                                                                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <!-- end lecture-item -->

                                                                            <div class="lecture-item">
                                                                                <h1>يجب عليك اختيار اجابة صحيحة واحده</h1>
                                                                                <ul>
                                                                                    @foreach($questions->answer as $answers)
                                                                                        <li>
                                                                                            <a class="btn active btn-danger" id="a">
                                                                                                <input  type="hidden"  name="type[]" value="Wrong" >
                                                                                                Wrong

                                                                                                <input  type="checkbox" onclick="exam(this)" name="type[]" value="{{$answers->type}}"><span>({{$answers->type}})</span>
                                                                                                @error('type')
                                                                                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                                @enderror

                                                                                            </a>
                                                                                            {!! Form::text('answer[]',$answers->answer,['placeholder'=>'اكتب الاجابة الاولي']) !!}
                                                                                            @error('answer')
                                                                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                            @enderror

                                                                                        </li>
                                                                                    @endforeach

                                                                                </ul>
                                                                                <input type="hidden" name="course_id" value="{{$courses->id}}">
                                                                                <input type="hidden" name="instructor_id" value="{{auth()->user()->id}}">

                                                                            </div>
                                                                            <!-- end lecture-item -->
                                                                            <div class="lecture-item confirm-lec">
                                                                                <input type="submit" value="نشر الاختبار">
                                                                            </div>
                                                                            <!-- end lecture-item -->
                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                        <script>
                                                                            $(document).ready(function () {

                                                                                $('.edit-questions_{{$questions->id}}').on("click",function () {
                                                                                    $('.edit_questions_{{$questions->id}}').stop();
                                                                                    $('.edit_questions_{{$questions->id}}').slideToggle(400);
                                                                                    console.log($('.edit-questions_{{$questions->id}}'));

                                                                                })



                                                                            })
                                                                        </script>
                                                                    @endforeach








                                                            </div>



                                                            <div class="add_lecture   edit_alert_{{$courses->id}} edit_exam">
                                                                @foreach($courses->alerts as $alerts)

                                                                    <a  class="edit-questions_{{$alerts->id}}  " id="add-n">
                                                                        <i class="fa fa-edit"></i> {{$alerts->title}}

                                                                    </a>

                                                                    <a style="color: black; background-color:burlywood;  border-radius: 10px ; margin: auto ; cursor: pointer" href="{{route('user.delete.alerts',$alerts->id)}}">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>







                                                                @endforeach




                                                                @foreach($courses->alerts as $alerts)

                                                                    <div class="add_lecture   edit_questions_{{$alerts->id}} add_exam">
                                                                        <div class="add_lecture in-one">
                                                                            {!! Form::model($alerts, ['route' => ['user.alerts.update',$alerts->id],'class'=>'form-horizontal','method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

                                                                            @csrf
                                                                            <div class="lost-inner">
                                                                                <h1>
                                                                                    <i class="fa fa-envelope"></i>
                                                                                    تعديل تنويه للطلاب المشتركين في الدورة
                                                                                </h1>
                                                                                <div class="lost-item" id="alert-item">
                                                                                    {!! Form::text('title',null,['placeholder'=>'عنوان التنويه']) !!}

                                                                                </div>
                                                                                <!-- /.lost-item -->
                                                                                <div class="lost-item" id="alert-item">
                                                                                    {!! Form::textarea('body',null,['placeholder'=>'مضمون التنويه']) !!}

                                                                                </div>
                                                                                <div>
                                                                                    <input name="course_id" type="hidden" value="{{$courses->id}}">
                                                                                    <input name="instructor_id" type="hidden" value="{{auth()->user()->id}}">
                                                                                </div>
                                                                                <!-- /.lost-item -->
                                                                                <div class="text-center">
                                                                                    <input type="submit" value="تعديل التنويه">
                                                                                </div>
                                                                                <!-- /.lost-item -->
                                                                            </div>



                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                    <script>
                                                                        $(document).ready(function () {

                                                                            $('.edit-questions_{{$alerts->id}}').on("click",function () {
                                                                                $('.edit_questions_{{$alerts->id}}').stop();
                                                                                $('.edit_questions_{{$alerts->id}}').slideToggle(400);
                                                                                console.log($('.edit-questions_{{$alerts->id}}'));

                                                                            })



                                                                        })
                                                                    </script>
                                                                @endforeach








                                                            </div>



                                                            <div class="add_lecture   edit_lessons_{{$courses->id}} edit_lessons">
                                                                @foreach($courses->lessons as $lessons)

                                                                    <a  class="lessons_{{$lessons->id}}  " id="add-n">
                                                                        <i class="fa fa-edit"></i> {{$lessons->lesson_name}}

                                                                    </a>
                                                                    <form style="display:inline;" action="{{route('user.lessons.destroy',$lessons->id)}}" method="POST">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <div class="text-center" style="display: inline;" >
                                                                            <input style="background-color: red" type="submit" value="حذف">
                                                                        </div>
                                                                    </form>







                                                                @endforeach



                                                                    @foreach($courses->lessons as $lessons)
                                                                        <div class="add_lecture    lessons_edit_{{$lessons->id}}">
                                                                        {!! Form::model($lessons, ['route' => ['user.lessons.update',$lessons->id],'class'=>'form-horizontal','method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}
                                                                        <!-- /. اسم الدرس  -->
                                                                            @csrf
                                                                            <div class="lecture-item">
                                                                                <h1>اسم الدرس</h1>
                                                                                {!! Form::text('lesson_name',null,['placeholder'=>'اضف اسم الدرس']) !!}
                                                                                <input type="hidden" name="course_id" value="{{$courses->id}}">
                                                                                @error('lesson_name')
                                                                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <!-- ///// -->


                                                                            <!--وصف المحاضرة -->
                                                                            <div class="lecture-item">
                                                                                <h1>وصف المحاضرة</h1>
                                                                                {!! Form::textarea('lesson_desc',null,['placeholder'=>'اضف وصف المحاضرة','rows'=> '1','col'=>'1' ]) !!}
                                                                                @error('lesson_desc')
                                                                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <!--////// -->

                                                                            <!-- /.lecture-item -->
                                                                            <div class="lecture-item">
                                                                                <h1>اضف رابط خارجي للفيديو</h1>
                                                                                <div class="add_cont text-right">
                                                                                    <label class="text-right">
                                                                                        <input type="checkbox" class="video_check"  onclick="lesson()">
                                                                                        <span>اذا أردت رفع فيديو من جهازك الشخصي</span>
                                                                                    </label>


                                                                                    <div class="videoUploaded col-xs-12 text-right video_lesson">
                                                                                        <span><i class="fa fa-video-camera"></i> ارفع فيديو من جهازك</span>
                                                                                        <input type="file" class="uploaded" name="video">
                                                                                    </div>
                                                                                    @error('video')
                                                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                @enderror
                                                                                <!--
                                                                            <label class="text-right">
                                                                                <input type="radio" id="add-link">
                                                                                <span>يوتيوب</span>
                                                                            </label>
-->
                                                                                </div>
                                                                                <input type="text" placeholder="ادخل رابط فيديو" class="lesson_linked" name="video_link">
                                                                                @error('video_link')
                                                                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <!-- /.lecture-item -->

                                                                            <div class="lecture-item">
                                                                                <h1>اضف رابط خارجي للأوراق العمل</h1>
                                                                                <div class="add_cont text-right">
                                                                                    <label class="text-right">
                                                                                        <input type="checkbox" class="up_peper" onclick="peper()" >
                                                                                        <span>اذا أردت رفع أوراق العمل من جهازك الشخصي</span>
                                                                                    </label>

                                                                                    <div class="videoUploaded col-xs-12 text-right peper peper_lesson">
                                                                                        <span><i class="fa fa-video-camera"></i> ارفع أوراق العمل من جهازك</span>
                                                                                        <input type="file" class="uploaded" name="paperwork">
                                                                                    </div>
                                                                                    @error('paperwork')
                                                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                @enderror

                                                                                <!--
                                                                            <label class="text-right">
                                                                                <input type="radio" id="add-link">
                                                                                <span>يوتيوب</span>
                                                                            </label>
-->
                                                                                </div>
                                                                                <input type="text" placeholder="ادخل رابط فيديو" class="linked pepper_linked" name="paperwork_link">
                                                                                @error('paperwork_link')
                                                                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                @enderror
                                                                                <span class="hint"> Image او Word او Powerpoint او Pdf الملفات يمكن ان تكون </span>

                                                                            </div>

                                                                            <!-- /.lecture-item -->
                                                                            <!-- /.lecture-item -->
                                                                            <div class="lecture-item add-sorting">
                                                                                <label>
                                                                                    <input type="checkbox" id="sort-lesson">
                                                                                    <span>يجب تحديد ترتيب الدرس </span>
                                                                                    <input type="number" data-toggle="tooltip" data-placement="top" title="اكتب ترتيب الدرس بالأرقام" class="add_sort-number" name="order" required>
                                                                                    @error('order')
                                                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                    @enderror
                                                                                </label>
                                                                            </div>

                                                                            <!-- /.lecture-item -->
                                                                            <div class="lecture-item confirm-lec">
                                                                                <input type="submit" value="إضافة محاضرة">
                                                                            </div>
                                                                            <!-- /.lecture-item -->

                                                                            </form>
                                                                        </div>
                                                                        <script>
                                                                            $(document).ready(function () {

                                                                                $('.lessons_{{$lessons->id}}').on("click",function () {
                                                                                    $('.lessons_edit_{{$lessons->id}}').stop();
                                                                                    $('.lessons_edit_{{$lessons->id}}').slideToggle(400);
                                                                                    console.log($('.lessons_edit_{{$lessons->id}}'));

                                                                                })



                                                                            })
                                                                        </script>
                                                                    @endforeach









                                                            </div>

















                                                            <script>



                                                                $(document).ready(function () {
                                                                    new WOW().init();

                                                                    $("#alert-form-{{$courses->id}}").click(function () {
                                                                        $("#alert_form_{{$courses->id}}").animate({
                                                                            "top": "-100%"
                                                                        }, 10).hide();
                                                                        $("#alert_form_{{$courses->id}}").show().animate({
                                                                            "top": "10%"
                                                                        }, 500);

                                                                    });
                                                                    $("#message-{{$courses->id}}").click(function () {
                                                                        $("#msg_all_{{$courses->id}}").animate({
                                                                            "top": "-100%"
                                                                        }, 10).hide();
                                                                        $("#msg_all_{{$courses->id}}").show().animate({
                                                                            "top": "10%"
                                                                        }, 500);

                                                                    });


                                                                    $('.add-course_{{$courses->id}}').on("click", function () {
                                                                        $('.add_lecture_{{$courses->id}}').stop();
                                                                        $('.add_lecture_{{$courses->id}}').slideToggle(400);
                                                                    });
                                                                    $('.edit-course_{{$courses->id}}').on("click", function () {
                                                                        $('.edit_courses_{{$courses->id}}').stop();
                                                                        $('.edit_courses_{{$courses->id}}').slideToggle(400);
                                                                    });



                                                                    $('.add-exam_{{$courses->id}}').on("click",function () {
                                                                        $('.add_exam_{{$courses->id}}').stop();
                                                                        $('.add_exam_{{$courses->id}}').slideToggle(400);


                                                                    })
                                                                    $('.edit-exam_{{$courses->id}}').on("click",function () {
                                                                        $('.edit_exam_{{$courses->id}}').stop();
                                                                        $('.edit_exam_{{$courses->id}}').slideToggle(400);


                                                                    })

                                                                    $('.edit-alert_{{$courses->id}}').on("click",function () {
                                                                        $('.edit_alert_{{$courses->id}}').stop();
                                                                        $('.edit_alert_{{$courses->id}}').slideToggle(400);


                                                                    })



                                                                    $('.edit-lessons_{{$courses->id}}').on("click",function () {
                                                                        $('.edit_lessons_{{$courses->id}}').stop();
                                                                        $('.edit_lessons_{{$courses->id}}').slideToggle(400);


                                                                    })





                                                                })

                                                            </script>










                                                            <div class="edit_courses  edit_courses_{{$courses->id}}">
                                                                <div class="up-container">
                                                                    <div class="up-header text-center">
                                                                        <div class="container">
                                                                            <h1>تعديل الدورة</h1>
                                                                        </div>
                                                                        <!-- /.container -->
                                                                    </div>
                                                                    <!-- /.up-header -->
                                                                    <div class="up-box">
                                                                            <div class="up-form">

                                                                                {!! Form::model($courses, ['route' => ['user.courses.update', $courses->id],'class'=>'form-horizontal','method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}
                                                                                    @csrf

                                                                                    <div class="up_form-item">
                                                                                        <h1>عنوان الدورة</h1>
                                                                                        {!! Form::text('name',null,['placeholder'=>'اضف عنوان الدورة']) !!}
                                                                                        @error('name')
                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                        @enderror

                                                                                    </div>
                                                                                    <!-- /.up_form-item -->
                                                                                    <div class="up_form-item">
                                                                                        <h1>المتطلب السابق</h1>
                                                                                        <select name="prerequisite">
                                                                                            @foreach($course as $courses)
                                                                                                <option value="{{$courses->name}}">
                                                                                                    {{$courses->name}}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        @error('prerequisite')
                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                        @enderror

                                                                                    </div>
                                                                                    <!-- /.up_form-item -->
                                                                                    <div class="up_form-item">
                                                                                        <h1>المجال</h1>
                                                                                        {!! Form::select('Scope_id',$scope_admin,null, ['class'=>'form-control input-xlg']); !!}
                                                                                        @error('Scope_id')
                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                        @enderror

                                                                                    </div>
                                                                                    <!-- /.up_form-item -->
                                                                                   <div class="up_form-item">
                                                                                    <h1>رابط فيديو</h1>
                                                                                    <div class="add_cont text-right">
                                                                                        <div class="lecture-item">
                                                                                            <div >
                                                                                                <label class="text-right">
                                                                                                    <input type="checkbox"  onclick="n()" class="show_video" >
                                                                                                    <span>اذا أردت رفع فيديو من جهازك الشخصي</span>
                                                                                                </label>

                                                                                                <div  style="display: none" class="videoUploaded col-xs-12 text-right video_pc">
                                                                                                    <span><i class="fa fa-video-camera"></i> ارفع فيديو من جهازك</span>
                                                                                                    {!! Form::file('video',null,['class'=>'uploaded']) !!}
                                                                                                    @error('video')
                                                                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                                    @enderror
                                                                                                </div>
                                                                                                <!--
                                                                                                                                    <label class="text-right">
                                                                                                                                        <input type="radio" id="add-link">
                                                                                                                                        <span>يوتيوب</span>
                                                                                           video_link                                        </label>
                                                                                -->
                                                                                            </div>

                                                                                        </div>
                                                                                        <!-- /.lecture-item -->
                                                                                    </div>
                                                                                    {!! Form::text('video_link',null,['placeholder'=>'ادخل رابط فيديو','class'=>'linked','class'=>'input_link']) !!}
                                                                                    @error('video_link')
                                                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                    @enderror


                                                                                </div>
                                                                                    <!-- /.up_form-item -->
                                                                                    <div class="up_form-item">
                                                                                        <h1>وصف الدورة</h1>
                                                                                        {!! Form::textarea('courses_desc',null,['placeholder'=>'اضف وصف الدورة']) !!}
                                                                                        @error('courses_desc')
                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                        @enderror

                                                                                    </div>
                                                                                    <!-- /.up_form-item -->

                                                                                <div class="up_form-item">
                                                                                    <h1>الجنس المتوقع</h1>
                                                                                    <div class="add_cont text-right">
                                                                                        <label class="text-right">
                                                                                            <input type="checkbox" name="gender_student[]" value="male">
                                                                                            <span>ذكور</span>
                                                                                        </label>
                                                                                        @error('gender_student')
                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                        @enderror
                                                                                        <label class="text-right">
                                                                                            <input type="checkbox" name="gender_student[]" value="female">
                                                                                            <span>إناث</span>
                                                                                        </label>
                                                                                        @error('gender_student')
                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                    <div class="up_form-item">
                                                                                        <h1>صوره الكورس</h1>
                                                                                        {!! Form::file('img',null); !!}
                                                                                        @error('img')
                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                        @enderror


                                                                                    </div>
                                                                                <div class="up_form-item">
                                                                                    <div class="form-group">
                                                                                        <div class='input-group date' name="start_date" data-date-format="yyyy-mm-dd"  data-provide="datepicker">
                                                                                            {!! Form::text('start_date' , null  ,['class' => 'form-control' ,'id' => "datepicker", 'style' => "text-align:right;" , 'placeholder' => "تاريخ البدء"]) !!}
                                                                                            <span class="input-group-addon">
             <span class="glyphicon glyphicon-calendar"></span>
             </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="up_form-item">
                                                                                    <div class="form-group">
                                                                                        <div class='input-group date' name="end_date" data-date-format="yyyy-mm-dd"  data-provide="datepicker">
                                                                                            {!! Form::text('end_date' , null  ,['class' => 'form-control' ,'id' => "datepicker", 'style' => "text-align:right;" , 'placeholder' => "تاريخ الانتهاء"]) !!}
                                                                                            <span class="input-group-addon">
             <span class="glyphicon glyphicon-calendar"></span>
             </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>



                                                                                <div class="up_form-item">
                                                                                        <h1>  نوع الدورة  </h1>
                                                                                        <div class="add_cont text-right">
                                                                                            <label class="text-right">
                                                                                                <input type="radio" name="courses_type" class="free"   onclick="cost()" value="free">
                                                                                                <span>مجاني</span>
                                                                                            </label>
                                                                                            @error('courses_type')
                                                                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                            @enderror
                                                                                            <label class="text-right">
                                                                                                <input type="radio" name="courses_type" class="paid" onclick="cost()" value="paid">
                                                                                                <span>مدفوع</span>
                                                                                            </label>
                                                                                            @error('courses_type')
                                                                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                            @enderror
                                                                                            <div class="cost" >
                                                                                                {{ Form::number('courses_cost', null,['data-toggle'=>'tooltip','data-placement'=>'top','title'=>'اضف سعر الدورة','step'=>'any','class'=>'input_cost']) }}

                                                                                            </div>
                                                                                            @error('courses_cost')
                                                                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                            @enderror
                                                                                            <input type="hidden" value="{{auth()->user()->id}}" name="instructor_id">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /.up_form-item -->

                                                                                    <div class="up_form-item">
                                                                                        <a class="add-cert">اضافة شهادة للدورة</a>
                                                                                        <div class="course-cert">
                                                                                            <div class="up_form-item">
                                                                                                <h1>إسم الشهادة</h1>
                                                                                                {!! Form::text('Certificate_name',null,['placeholder'=>'اضف اسم الشهادة']) !!}
                                                                                                @error('Certificate_name')
                                                                                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                                @enderror

                                                                                            </div>
                                                                                            <!-- /.up_form-item -->
                                                                                            <div class="up_form-item">
                                                                                                <h1>الجهة المانحة</h1>
                                                                                                {!! Form::text('Donor',null,['placeholder'=>'اضف الجهة المانحة']) !!}
                                                                                                @error('Donor')
                                                                                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                                @enderror

                                                                                            </div>
                                                                                            <!-- /.up_form-item -->
                                                                                            <div class="up_form-item">
                                                                                                <h1>تكلفة الشهادة</h1>
                                                                                                <div class="add_cont text-right">
                                                                                                    <label class="text-right">
                                                                                                        <input type="radio" name="Certification_type" class="free_certfi"  onclick="certif_cost()" value="free">
                                                                                                        @error('Certification_type')
                                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                                        @enderror
                                                                                                        <span>مجاني</span>
                                                                                                    </label>
                                                                                                    <label class="text-right">
                                                                                                        <input type="radio" name="Certification_type" class="paid_certfi"  onclick="certif_cost()" value="paid">
                                                                                                        @error('Certification_type')
                                                                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                                        @enderror
                                                                                                        <span>مدفوع</span>
                                                                                                    </label>
                                                                                                    <div class="certif_cost" >
                                                                                                        {{ Form::number('Certification_cost', null,['data-toggle'=>'tooltip','data-placement'=>'top','title'=>'اضف سعر لشهادة','step'=>'any','class'=>'input_ceritf']) }}

                                                                                                    </div>
                                                                                                    @error('Certification_cost')
                                                                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                                                                    @enderror

                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /.up_form-item -->
                                                                                        </div>
                                                                                        <!-- /.course-cert -->
                                                                                    </div>
                                                                                    <div class="up_form-item up-confirm">
                                                                                        <input type="submit" value="تعديل الدورة">
                                                                                    </div>

                                                                                {!! Form::close() !!}

                                                                            </div>
                                                                            <!-- /.up-form -->
                                                                        <!-- /.container -->
                                                                    </div>
                                                                    <!-- /.up-box -->
                                                                </div>

                                                            </div>
                                                            <!-- /.add_lecture -->
                                                        </div>
                                                        <!-- /.instructor-control -->
                                                        <ul>
                                                            <li>
                                                                <h1>
                                                                    <label>الوصف</label>
                                                                    <span class="par">
                                                                        {{$courses->courses_desc}}
                                                                    </span>
                                                                </h1>
                                                            </li>
                                                            <li>
                                                                <h1>
                                                                    <label>المجال</label>
                                                                    <span>{{$courses->scope->name}}</span>
                                                                </h1>
                                                            </li>


                                                            <li>
                                                                <h1>
                                                                    <label>الحالة</label>
                                                                    <span>{{$courses->status}}</span>
                                                                </h1>
                                                            </li>
                                                            @if(!$courses->prerequisite==null)
                                                            <li>
                                                                <h1>
                                                                    <label>المتطلب السابق</label>
                                                                    <span>{{$courses->prerequisite}}</span>
                                                                </h1>
                                                            </li>
                                                            @endif

                                                            <li>
                                                                <h1>
                                                                    <label>نشرت / لم تنشر</label>
                                                                    <span>برمجة وعلوم</span>
                                                                </h1>
                                                            </li>




                                                            @if(!$courses->Certificate_name==null)
                                                            <li>
                                                                <h1>
                                                                    <label>الشهادة</label>
                                                                    <span>{{$courses->Certificate_name}}</span>
                                                                </h1>
                                                            </li>
                                                                <li>
                                                                    @if($courses->Certification_type=='paid')
                                                                    <h1>
                                                                        <label>نوع الشهادة</label>
                                                                        <span>مدفوعة</span>
                                                                    </h1>
                                                                    @else
                                                                        <h1>
                                                                            <label>نوع الشهادة</label>
                                                                            <span>مجانا</span>
                                                                        </h1>
                                                                    @endif
                                                                </li>

                                                                <li>
                                                                    <h1>
                                                                        <label>سعر الشهادة</label>
                                                                        <span>{{$courses->Certification_cost}}</span>
                                                                    </h1>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <h1>
                                                                        <label>الشهادة</label>
                                                                        <span>لاتوجد شهاده لهذا الكورس</span>
                                                                    </h1>
                                                                </li>
                                                            @endif
                                                            <li>
                                                                <h1>
                                                                    <label>النوع المتاح لمتابعة الدورة</label>
                                                                    @for($i=0; $i<count($courses->gender_student) ; $i++)
                                                                    <span>[{{$courses->gender_student[$i]}}]</span>
                                                                    @endfor
                                                                </h1>
                                                            </li>






                                                            @if($courses->courses_type=='paid')
                                                                <li>
                                                                    <h1>
                                                                        <label>نوع الكورس</label>
                                                                        <span>مدفوع</span>
                                                                    </h1>
                                                                </li>
                                                            <li>
                                                                <h1>
                                                                    <label>سعر الكورس</label>
                                                                    <span>{{$courses->courses_cost}}</span>
                                                                </h1>
                                                            </li>
                                                            @else
                                                                <li>
                                                                    <h1>
                                                                        <label>نوع الكورس</label>
                                                                        <span>مجانا</span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>سعر الكورس</label>
                                                                        <span>مجانا</span>
                                                                    </h1>
                                                                </li>

                                                            @endif
                                                            <li>
                                                                <h1>
                                                                    <label>تاريخ بداية الدورة</label>
                                                                    <span>{{\Carbon\Carbon::parse($courses->start_date)->translatedFormat('l j F Y ')}}</span>
                                                                </h1>
                                                            </li>
                                                            <li>
                                                                <h1>
                                                                    <label>تاريخ نهاية الدورة</label>
                                                                    <span>{{\Carbon\Carbon::parse($courses->end_date)->translatedFormat('l j F Y ')}}</span>
                                                                </h1>
                                                            </li>

                                                            <li>
                                                                <h1>
                                                                    <label>إسم المدرب</label>
                                                                    <span>{{$courses->user->name}}</span>
                                                                </h1>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.panel-body -->

                                                </div>
                                                <!-- /#collapseOne -->
                                            </div>
                                        @endforeach

                                            <!-- /.panel-default -->

                                        </div>

                                        <!-- /.panel-group -->


                                    </div>
                                    <!-- end shop-wrapper -->
                                </div>
                                <!-- ./home_data -->
                            </div>
                            <!-- /.home-content -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="cv">
                            <div class="home-head">
                                <h1>
                                    <i class="fa fa-file"></i>
                                    أضف ملف سيرتك الذاتية
                                </h1>
                            </div>
                            <!-- /.home-head -->
                            <div class="home-content pass-content col-xs-12">
                                <div class="home_data col-xs-12 pull-right text-right">
                                    <div class="home_data-item col-md-12  col-xs-12 pull-right">
                                        <div>
                                            <form class="cv-file" action="{{route('user.cv.store')}}" method="post">
                                                @csrf
                                                <h1>أضف رابط خارجي لملف السيرة الذاتية</h1>
                                                <input type="url" placeholder="رابط خارجي" name="cv_link">
                                                <h1>او يمكنك كتابتها بنفسك من خلال</h1>
                                                <textarea placeholder="اكتب سيرتك الذاتية" name="cv"></textarea>
                                                <input type="hidden" name="instructor_id" value="{{auth()->user()->id}}">
                                                <input type="submit" value="حفظ">
                                                <a class="show-cv">عرض ملف السيرة الذاتية</a>
                                            </form>
                                        </div>
                                      @if(!$cv == null)
                                        <div class="cv-container text-center">
                                            @foreach($cv as $cv_instructor)
@if($cv_instructor->cv !== null  && $cv_instructor->cv_link !==null)
                                            <p> {{$cv_instructor->cv}}</p>
                                                    <p> {{$cv_instructor->cv_link}}</p>

                                                @elseif($cv_instructor->cv_link!==null)
                                                    <p> {{$cv_instructor->cv_link}}</p>
                                                @elseif( $cv_instructor->cv !== null)
                                                    <p> {{$cv_instructor->cv}}</p>


                                                @endif


                                            @endforeach

                                            <a href="/Theme/#">
                                                <i class="fa fa-cloud-download"></i> تحميل ملف السيرة الذاتية
                                            </a>
                                        </div>
                                    @else
                                          <div class="cv-container text-center" >
                                              <span>لايوجد سيرة ذاتيه الآن الرجاء كتابة سيره ذاتية </span>
                                          </div>
                                        @endif
                                        <!-- /.cv-container -->
                                    </div>
                                    <!-- /.home_data-item -->



                                </div>
                                <!-- ./home_data -->
                            </div>
                            <!-- /.home-content -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="interests">
                            <div class="home-head">
                                <h1>
                                    <i class="fa fa-diamond"></i>
                                    الاهتمامات
                                </h1>
                            </div>
                            <!-- /.home-head -->
                            <div class="home-content pass-content col-xs-12">
                                <div class="home_data col-xs-12 pull-right text-right">
                                    <div class="interest-show">

                                        <ul>
                                            @foreach($scope as $scopes)
                                            <li>

                                                    <span class="inter-item">
                                                        {{$scopes->name}}

                                <a href="{{route('user.scope.delete',['id'=>$scopes->id , 'user_id'=>auth()->user()->id])}}" > <i class="fa fa-times" id="del-item"></i></a>



                                                    </span>



                                            </li>
                                            @endforeach

                                        </ul>

                                    </div>
                                    <!-- /.interest-show -->
                                    <div class="add-interest">
                                        <a>
                                            <i class="fa fa-plus"></i> أضف اهتمامات أخري
                                        </a>
                                    </div>
                                    <!-- /.add-interest -->
                                    <div class="home_data-item col-md-12  col-xs-12 pull-right">
                                        <form action="{{route('user.scopes.store')}}" method="Post">
                                            @csrf
                                        <div class="interest-cont col-xs-12">

                                                @foreach($scopeAdmin as $scope)
                                            <div class="interest-item col-md-4 col-sm-4 col-xs-6">

                                                <label>
                                                    <input type="hidden" value="{{auth()->user()->id}}" name="id">
                                                    <input type="checkbox" value="{{$scope->id}}" name="scope_id[]">
                                                    <span>{{$scope->name}}</span>
                                                </label>
                                            </div>
                                            <!-- /.interest-item -->
                                                @endforeach

                                        </div>
                                        <!-- /.interest-cont -->
                                        <div class="interst-gender col-xs-12">

                                            <div class="cv-file text-left">
                                                <input type="submit" value="حفظ">
                                            </div>
                                        </div>


                                        </form>
                                        <!-- /.interest-gender -->
                                    </div>
                                    <!-- /.home_data-item -->
                                </div>
                                <!-- ./home_data -->
                            </div>
                            <!-- /.home-content -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="all-courses">
                            <div class="home-head">
                                <h1>
                                    <i class="fa fa-eye"></i>
                                    جميع الدورات
                                </h1>
                            </div>
                            <!-- /.home-head -->
                            <div class="home-content pass-content col-xs-12">
                                <div class="home_data col-xs-12 pull-right text-right">
                                    <div class="my_courses-container">
                                        <div>

                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="/Theme/#current" aria-controls="current" role="tab" data-toggle="tab">الدورات الحالية</a></li>
                                                <li role="presentation"><a href="/Theme/#comming" aria-controls="comming" role="tab" data-toggle="tab">الدورات المرتقبه</a></li>

                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">


                                                <div role="tabpanel" class="tab-pane fade in active" id="current">
                                                    @foreach($courses_active as $type )
                                                        @if(count($type->courses) > 0  )



                                                            @foreach($type->courses as $courses)
                                                            <div id="cv_nn_{{$courses->id}}" style="display: none">
                                                                <div class="up-container">
                                                                    <div class="up-header text-center">
                                                                        <div class="container">
                                                                            <h1>تعرف علي السيرة الذاتية لدي المدرب</h1>
                                                                        </div>
                                                                        <!-- /.container -->
                                                                    </div>
                                                                    <!-- /.up-header -->
                                                                    <div class="up-box">
                                                                        <div >
                                                                            <div class="up-form">
                                                                                @isset($courses->user->cv->cv)
                                                                                    <div class="privacy-box ">
                                                                                        {{$courses->user->cv->cv}}


                                                                                    </div>
                                                                                @else
                                                                                    <div class="privacy-box ">
                                                                                        لايوجد سيرة ذاتيه حاليا لهذا المدرب


                                                                                    </div>

                                                                                @endisset

                                                                                <div class="up_form-item up-confirm" onclick="back()">
                                                                                    <input type="submit" value="رجوع ">
                                                                                </div>
                                                                                <!-- /.privacy-box -->
                                                                            </div>
                                                                            <!-- /.up-form -->
                                                                        </div>
                                                                        <!-- /.container -->
                                                                    </div>
                                                                    <!-- /.up-box -->
                                                                </div>

                                                            </div>
                                                            @endforeach

                                                            <div class="type col-xs-12" id="show">

                                                            @php
$i=0;
@endphp

                                                                @foreach($type->courses as $course)


                                                                    @if(!$test->contains($course->id)    )
                                                                        @if($i=== 0 )


                                                        <div class="filtered-head text-right">
                                                            <h1>
                                                                <i class="fa fa-tags"></i>{{$type->name}}
                                                            </h1>
                                                        </div>
                                                                        @endif

                                                                              <span style="display: none"  >{{$i++}}</span>


                                                                    @endif
                                                                @endforeach
                                                                <span style="display: none">{{$i = 0}}</span>







                                                                    @if(count($test) > 0 )
                                                              @foreach($type->courses as $courses)
                                                                  @if(!$test->contains($courses->id))

                                                        <div class="card col-md-6 col-xs-12 pull-right"  >
                                                            <div class="card-inner">
                                                                <span class="corse-type">{{$courses->name}}</span>
                                                                <div class="card-img">

                                                                    <img src="/storage/{{$courses->img}}" alt="" class="img-responsive">
                                                                    <div class="lessons-number text-center">
                                                                        <h1>
                                                                            <i class="fa fa-play-circle"></i>
                                                                            {{$courses->lessons->count()}}
                                                                        </h1>
                                                                    </div>
                                                                    <!-- /.lessons-number -->
                                                                </div>
                                                                <!-- /.card-img -->
                                                                <div class="card-data">
                                                                    <div class="course_name text-right">
                                                                        <h1>
                                                                            <a href="{{route('user.courses.show',$courses->id)}}">{{$courses->name}} </a>
                                                                        </h1>
                                                                    </div>
                                                                    <!-- /.course-name -->
                                                                    <div class="course_setting text-right">
                                                                            <span class="course_date">
                                                                                <i class="fa fa-calendar"></i>
                                                                                {{$courses->start_date}}
                                                                            </span>
                                                                    </div>
                                                                    <div class="course_setting text-right">
                                                                            <span class="course_date">
                                                                                <i class="fa fa-calendar"></i>
                                                                                {{$courses->end_date}}
                                                                            </span>
                                                                    </div>
                                                                    <!-- /.course_setting -->
                                                                    <div class="course_instructor-data">
                                                                            <span>
                                                                                <img src="/storage/{{$courses->user->img}}" width="70" height="70" class="img-responsive">
                                                                            </span>
                                                                        <a  id="nn" onclick="d()" style="cursor: pointer">
                                                                            <i class="fa fa-user"></i>{{$courses->user->name}}
                                                                        </a>
                                                                    </div>
                                                                    <!-- /.course_instructor-data -->
                                                                </div>
                                                                <!-- /.card-data -->

                                                            </div>
                                                            <!-- /.card-inner -->
                                                        </div>


                                                                    @endif
                                                                  @endforeach
                                                                @else

                                                                        @foreach($type->courses as $courses)

                                                                                <div class="card col-md-6 col-xs-12 pull-right" >
                                                                                    <div class="card-inner">
                                                                                        <span class="corse-type">{{$courses->name}}</span>
                                                                                        <div class="card-img">

                                                                                            <img src="/storage/{{$courses->img}}" alt="" class="img-responsive">
                                                                                            <div class="lessons-number text-center">
                                                                                                <h1>
                                                                                                    <i class="fa fa-play-circle"></i>
                                                                                                    {{$courses->lessons->count()}}
                                                                                                </h1>
                                                                                            </div>
                                                                                            <!-- /.lessons-number -->
                                                                                        </div>
                                                                                        <!-- /.card-img -->
                                                                                        <div class="card-data">
                                                                                            <div class="course_name text-right">
                                                                                                <h1>
                                                                                                    <a href="{{route('user.courses.show',$courses->id)}}">{{$courses->name}} </a>
                                                                                                </h1>
                                                                                            </div>
                                                                                            <!-- /.course-name -->
                                                                                            <div class="course_setting text-right">
                                                                            <span class="course_date">
                                                                                <i class="fa fa-calendar"></i>
                                                                                {{$courses->created_at}}
                                                                            </span>
                                                                                            </div>
                                                                                            <!-- /.course_setting -->
                                                                                            <div class="course_instructor-data">
                                                                            <span>
                                                                                <img src="/storage/{{$courses->user->img}}" width="70" height="70" class="img-responsive">
                                                                            </span>
                                                                                                <a  id="nn" onclick="d()" style="cursor: pointer">
                                                                                                    <i class="fa fa-user"></i>{{$courses->user->name}}
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- /.course_instructor-data -->
                                                                                        </div>
                                                                                        <!-- /.card-data -->

                                                                                    </div>
                                                                                    <!-- /.card-inner -->
                                                                                </div>








                                                                    @endforeach

                                                                @endif
                                                                    <!-- /.card -->
                                                        <!-- /.card -->
                                                    </div>
                                                                <script>
                                                                    function  d(){
                                                                        var s= document.getElementById('nn')
                                                                        var div_show = document.getElementById('show')
                                                                        var cv =document.getElementById('cv_nn_{{$courses->id}}')

                                                                        div_show.style.display='none'
                                                                        cv.style.display='block'
                                                                    }
                                                                    function back(){
                                                                        var s= document.getElementById('nn')
                                                                        var div_show = document.getElementById('show')
                                                                        var cv =document.getElementById('cv_nn_{{$courses->id}}')
                                                                        div_show.style.display='block'
                                                                        cv.style.display='none'

                                                                    }
                                                                </script>

                                                    @else
                                                            <div class="flash_empty text-center">
                                                                <h1 class="animated shake">
                                                                    <i class="fa fa-frown-o"></i>
                                                                    عفواً لا يوجد لديك دورات في هذا القسم
                                                                </h1>
                                                            </div>

                                                    @endif


                                                @endforeach

                                                        <!-- /.type -->
                                                </div>



















                                                <div role="tabpanel" class="tab-pane fade" id="comming">
                                                    @foreach($courses_unactive as $type )
                                                        @if(count($type->courses) > 0  )
                                                            @foreach($type->courses as $courses)
                                                                <div id="cv_nn_{{$courses->id}}" style="display: none">
                                                                    <div class="up-container">
                                                                        <div class="up-header text-center">
                                                                            <div class="container">
                                                                                <h1>تعرف علي السيرة الذاتية لدي المدرب</h1>
                                                                            </div>
                                                                            <!-- /.container -->
                                                                        </div>
                                                                        <!-- /.up-header -->
                                                                        <div class="up-box">
                                                                            <div >
                                                                                <div class="up-form">
                                                                                    @isset($courses->user->cv->cv)
                                                                                        <div class="privacy-box ">
                                                                                            {{$courses->user->cv->cv}}


                                                                                        </div>
                                                                                    @else
                                                                                        <div class="privacy-box ">
                                                                                            لايوجد سيرة ذاتيه حاليا لهذا المدرب


                                                                                        </div>

                                                                                    @endisset

                                                                                    <div class="up_form-item up-confirm" onclick="back_c()">
                                                                                        <input type="submit" value="رجوع ">
                                                                                    </div>
                                                                                    <!-- /.privacy-box -->
                                                                                </div>
                                                                                <!-- /.up-form -->
                                                                            </div>
                                                                            <!-- /.container -->
                                                                        </div>
                                                                        <!-- /.up-box -->
                                                                    </div>

                                                                </div>
                                                            @endforeach

                                                            <div class="type col-xs-12" id="show_come">
                                                                @php
                                                                    $i=0;
                                                                @endphp
                                                  @if(count($unactive) > 0)
                                                                @foreach($type->courses as $course)
                                                                    @if(!$unactive->contains($course->id))
                                                                            @if($i=== 0 )

                                                                        <div class="filtered-head text-right">
                                                                            <h1>
                                                                                <i class="fa fa-tags"></i>{{$type->name}}
                                                                            </h1>
                                                                        </div>
                                                                            @endif
                                                                                <span style="display: none"  >{{$i++}}</span>


                                                                        @endif
                                                                @endforeach
                                                                    <span style="display: none"  >{{$i=0}}</span>

                                                                @else
                                                                    <div class="filtered-head text-right">
                                                                        <h1>
                                                                            <i class="fa fa-tags"></i>{{$type->name}}
                                                                        </h1>
                                                                    </div>
                                                                @endif



                                                                <!-- /.filtered-head -->
                                                      @if(count($unactive) > 0 )
                                                          @foreach($type->courses as $courses)
                                                              @if(!$unactive->contains($courses->id))

                                                                  <div class="card col-md-6 col-xs-12 pull-right"  >
                                                                      <div class="card-inner">
                                                                          <span class="corse-type">{{$courses->name}}</span>
                                                                          <div class="card-img">

                                                                              <img src="/storage/{{$courses->img}}" alt="" class="img-responsive">
                                                                              <div class="lessons-number text-center">
                                                                                  <h1>
                                                                                      <i class="fa fa-play-circle"></i>
                                                                                      {{$courses->lessons->count()}}
                                                                                  </h1>
                                                                              </div>
                                                                              <!-- /.lessons-number -->
                                                                          </div>
                                                                          <!-- /.card-img -->
                                                                          <div class="card-data">
                                                                              <div class="course_name text-right">
                                                                                  <h1>
                                                                                      <a href="{{route('user.courses.show',$courses->id)}}">{{$courses->name}} </a>
                                                                                  </h1>
                                                                              </div>
                                                                              <!-- /.course-name -->
                                                                              <div class="course_setting text-right">
                                                                            <span class="course_date">
                                                                                <i class="fa fa-calendar"></i>
                                                                                {{$courses->start_date}}
                                                                            </span>
                                                                              </div>
                                                                              <!-- /.course_setting -->
                                                                              <div class="course_instructor-data">
                                                                            <span>
                                                                                <img src="/storage/{{$courses->user->img}}" width="70" height="70" class="img-responsive">
                                                                            </span>
                                                                                  <a  id="nn" onclick="c()" style="cursor: pointer">
                                                                                      <i class="fa fa-user"></i>{{$courses->user->name}}
                                                                                  </a>
                                                                              </div>
                                                                              <!-- /.course_instructor-data -->
                                                                          </div>
                                                                          <!-- /.card-data -->

                                                                      </div>
                                                                      <!-- /.card-inner -->
                                                                  </div>


                                                              @endif
                                                          @endforeach
                                                      @else
                                                          @foreach($type->courses as $courses)

                                                              <div class="card col-md-6 col-xs-12 pull-right" id="show->{{$courses->id}}">
                                                                  <div class="card-inner">
                                                                      <span class="corse-type">{{$courses->name}}</span>
                                                                      <div class="card-img">

                                                                          <img src="/storage/{{$courses->img}}" alt="" class="img-responsive">
                                                                          <div class="lessons-number text-center">
                                                                              <h1>
                                                                                  <i class="fa fa-play-circle"></i>
                                                                                  {{$courses->lessons->count()}}
                                                                              </h1>
                                                                          </div>
                                                                          <!-- /.lessons-number -->
                                                                      </div>
                                                                      <!-- /.card-img -->
                                                                      <div class="card-data">
                                                                          <div class="course_name text-right">
                                                                              <h1>
                                                                                  <a href="{{route('user.courses.show',$courses->id)}}">{{$courses->name}} </a>
                                                                              </h1>
                                                                          </div>
                                                                          <!-- /.course-name -->
                                                                          <div class="course_setting text-right">
                                                                            <span class="course_date">
                                                                                <i class="fa fa-calendar"></i>
                                                                                {{$courses->start_date}}
                                                                            </span>
                                                                          </div>
                                                                          <!-- /.course_setting -->
                                                                          <div class="course_instructor-data">
                                                                            <span>
                                                                                <img src="/storage/{{$courses->user->img}}" width="70" height="70" class="img-responsive">
                                                                            </span>
                                                                              <a  id="nn" onclick="c()" style="cursor: pointer">
                                                                                  <i class="fa fa-user"></i>{{$courses->user->name}}
                                                                              </a>
                                                                          </div>
                                                                          <!-- /.course_instructor-data -->
                                                                      </div>
                                                                      <!-- /.card-data -->

                                                                  </div>
                                                                  <!-- /.card-inner -->
                                                              </div>








                                                      @endforeach

                                                  @endif

                                                      <!-- /.card -->
                                                                <!-- /.card -->
                                                                <script>
                                                                    function  c(){
                                                                        var s= document.getElementById('nn')
                                                                        var div_show = document.getElementById('show_come')
                                                                        var cv =document.getElementById('cv_nn_{{$courses->id}}')

                                                                        div_show.style.display='none'
                                                                        cv.style.display='block'
                                                                    }
                                                                    function back_c(){
                                                                        var s= document.getElementById('nn')
                                                                        var div_show = document.getElementById('show_come')
                                                                        var cv =document.getElementById('cv_nn_{{$courses->id}}')
                                                                        div_show.style.display='block'
                                                                        cv.style.display='none'

                                                                    }
                                                                </script>

                                                            </div>

                                                        @else
                                                            <div class="flash_empty text-center">
                                                                <h1 class="animated shake">
                                                                    <i class="fa fa-frown-o"></i>
                                                                    عفواً لا يوجد لديك دورات في هذا القسم
                                                                </h1>
                                                            </div>

                                                    @endif


                                                @endforeach

                                                <!-- /.flash_empty -->
                                                </div>



                                                <!-- /#current -->
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.my_courses-container -->
                                </div>
                                <!-- ./home_data -->
                            </div>
                            <!-- /.home-content -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="my_courses">
                            <div class="home-head">
                                <h1>
                                    <i class="fa fa-folder-open-o"></i>
                                    دوراتي
                                </h1>
                            </div>
                            <!-- /.home-head -->
                            <div class="home-content pass-content col-xs-12">
                                <div class="home_data col-xs-12 pull-right text-right">
                                    <div class="my_courses-container">
                                        <div>

                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="/Theme/#currentmy" aria-controls="current" role="tab" data-toggle="tab">الدورات الحالية</a></li>
                                                <li role="presentation"><a href="/Theme/#commingmy" aria-controls="comming" role="tab" data-toggle="tab">الدورات القادمة</a></li>
                                                <li role="presentation"><a href="/Theme/#finishedmy" aria-controls="comming" role="tab" data-toggle="tab">الدورات المنتهية</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="currentmy">
                                                    @if(count($current_courses) > 0)
                                    @foreach($current_courses as $scope)
                                     @if(count($scope->courses) > 0)
                                                                @foreach($scope->courses as $courses)
                                                                    <div id="cv_current_{{$courses->id}}" style="display: none">
                                                                        <div class="up-container">
                                                                            <div class="up-header text-center">
                                                                                <div class="container">
                                                                                    <h1>تعرف علي السيرة الذاتية لدي المدرب</h1>
                                                                                </div>
                                                                                <!-- /.container -->
                                                                            </div>
                                                                            <!-- /.up-header -->
                                                                            <div class="up-box">
                                                                                <div >
                                                                                    <div class="up-form">
                                                                                        @isset($courses->user->cv->cv)
                                                                                            <div class="privacy-box ">
                                                                                                {{$courses->user->cv->cv}}


                                                                                            </div>
                                                                                        @else
                                                                                            <div class="privacy-box ">
                                                                                                لايوجد سيرة ذاتيه حاليا لهذا المدرب


                                                                                            </div>

                                                                                        @endisset

                                                                                        <div class="up_form-item up-confirm" onclick="back_current()">
                                                                                            <input type="submit" value="رجوع ">
                                                                                        </div>
                                                                                        <!-- /.privacy-box -->
                                                                                    </div>
                                                                                    <!-- /.up-form -->
                                                                                </div>
                                                                                <!-- /.container -->
                                                                            </div>
                                                                            <!-- /.up-box -->
                                                                        </div>

                                                                    </div>
                                                                @endforeach

                                                    <div class="type col-xs-12" id="current_show">
                                                        @php
                                                            $i=0;
                                                        @endphp
                                                        @foreach($scope->courses as $courses)
                                                            @if(!$certf->contains('course_id',$courses->id))
                                                                @if($i=== 0 )
                                                        <div class="filtered-head text-right">
                                                            <h1>
                                                                <i class="fa fa-tags"></i>
                                                                {{$scope->name}}
                                                            </h1>
                                                        </div>
                                                                @endif
                                                                    <span style="display: none"  >{{$i++}}</span>


                                                            @endif



                                                        @endforeach
                                                        <span style="display: none"  >{{$i=0}}</span>

                                                        <!-- /.filtered-head -->
                                                        @foreach($scope->courses as $course)
                                                                @if(!$certf->contains('course_id',$course->id))
                                                        <div class="card col-md-6 col-xs-12 pull-right">
                                                            <div class="card-inner">
                                                                <span class="corse-type">{{$course->scope->name}}</span>
                                                                <div class="card-img">

                                                                    <img src="/storage/{{$course->img}}" alt="" class="img-responsive">
                                                                    <div class="lessons-number text-center">
                                                                        <h1>
                                                                            <i class="fa fa-play-circle"></i>
                                                                            {{$course->lessons->count()}}
                                                                        </h1>
                                                                    </div>
                                                                    <!-- /.lessons-number -->
                                                                </div>
                                                                <!-- /.card-img -->
                                                                <div class="card-data">
                                                                    <div class="course_name text-right">
                                                                        <h1>
                                                                            <a >{{$course->name}} </a>
                                                                        </h1>
                                                                    </div>
                                                                    <!-- /.course-name -->
                                                                    <div class="course_setting text-right">
                                                                            <span class="course_date">
                                                                                <i class="fa fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($course->created_at)->translatedFormat('l j F Y ') }}
                                                                            </span>
                                                                    </div>
                                                                    <!-- /.course_setting -->
                                                                    <div class="course_instructor-data">
                                                                            <span>
                                                                                <img src="/storage/{{$course->user->img}}" width="70" height="70" class="img-responsive">
                                                                            </span>
                                                                        <a id="nn" onclick="current()" style="cursor: pointer">
                                                                            <i class="fa fa-user"></i>{{$course->user->name}}
                                                                        </a>
                                                                    </div>
                                                                    <!-- /.course_instructor-data -->
                                                                    <div class="corse-action">
                                                                        <a href="{{route('user.subscription.show',$course->id)}}" class="gonna-corse">
                                                                            <i class="fa fa-paper-plane"></i> إذهب الي الدورة
                                                                        </a>
                                                                        <a href="{{route('user.subscription.delete',['id'=>$course->id , 'user_id'=>auth()->user()->id] )}}" class="out-corse">
                                                                            <i class="fa fa-sign-out"></i> إنسحاب من الدورة
                                                                        </a>
                                                                    </div>
                                                                    <!-- /.corse-action -->
                                                                </div>
                                                                <!-- /.card-data -->

                                                            </div>
                                                            <!-- /.card-inner -->
                                                        </div>
                                                            @endif
                                                        <!-- /.card -->


                                                    @endforeach



                                                        <!-- /.card -->
                                                    </div>
                                                            @else
                                                                <div class="flash_empty text-center">
                                                                    <h1 class="animated shake">
                                                                        <i class="fa fa-frown-o"></i>
                                                                        عفواً لا يوجد لديك دورات في هذا القسم
                                                                    </h1>
                                                                </div>

                                                            @endif

                                         <script>
                                             function  current(){
                                                 var s= document.getElementById('nn')
                                                 var div = document.getElementById('current_show')
                                                 var cv =document.getElementById('cv_current_{{$courses->id}}')
                                                 div.style.display='none'
                                                 cv.style.display='block'
                                             }
                                             function back_current(){
                                                 var s= document.getElementById('nn')
                                                 var div = document.getElementById('current_show')
                                                 var cv =document.getElementById('cv_current_{{$courses->id}}')
                                                 div.style.display='block'
                                                 cv.style.display='none'

                                             }
                                         </script>

                                                @endforeach
                                                @else
                                                        <div class="flash_empty text-center">
                                                            <h1 class="animated shake">
                                                                <i class="fa fa-frown-o"></i>
                                                                عفواً لا يوجد لديك دورات في هذا القسم
                                                            </h1>
                                                        </div>

                                                @endif

                                                    <!-- /.type -->
                                                </div>

                                                <!-- /#currentmy -->
                                                <div role="tabpanel" class="tab-pane fade " id="commingmy">
                                                    @if(count($coming_courses) > 0)
                                                        @foreach($coming_courses as $scope)
                                                            @if(count($scope->courses) > 0)
                                                                @foreach($scope->courses as $courses)
                                                                    <div id="cv_coming_{{$courses->id}}" style="display: none">
                                                                        <div class="up-container">
                                                                            <div class="up-header text-center">
                                                                                <div class="container">
                                                                                    <h1>تعرف علي السيرة الذاتية لدي المدرب</h1>
                                                                                </div>
                                                                                <!-- /.container -->
                                                                            </div>
                                                                            <!-- /.up-header -->
                                                                            <div class="up-box">
                                                                                <div >
                                                                                    <div class="up-form">
                                                                                        @isset($courses->user->cv->cv)
                                                                                            <div class="privacy-box ">
                                                                                                {{$courses->user->cv->cv}}


                                                                                            </div>
                                                                                        @else
                                                                                            <div class="privacy-box ">
                                                                                                لايوجد سيرة ذاتيه حاليا لهذا المدرب


                                                                                            </div>

                                                                                        @endisset

                                                                                        <div class="up_form-item up-confirm" onclick="back_coming()">
                                                                                            <input type="submit" value="رجوع ">
                                                                                        </div>
                                                                                        <!-- /.privacy-box -->
                                                                                    </div>
                                                                                    <!-- /.up-form -->
                                                                                </div>
                                                                                <!-- /.container -->
                                                                            </div>
                                                                            <!-- /.up-box -->
                                                                        </div>

                                                                    </div>
                                                                @endforeach
                                                                <div class="type col-xs-12" id="coming_show">
                                                                    <div class="filtered-head text-right">
                                                                        <h1>
                                                                            <i class="fa fa-tags"></i>
                                                                            {{$scope->name}}
                                                                        </h1>
                                                                    </div>
                                                                    <!-- /.filtered-head -->
                                                                    @foreach($scope->courses as $course)
                                                                        <div class="card col-md-6 col-xs-12 pull-right">
                                                                            <div class="card-inner">
                                                                                <span class="corse-type">{{$course->scope->name}}</span>
                                                                                <div class="card-img">

                                                                                    <img src="/storage/{{$course->img}}" alt="" class="img-responsive">
                                                                                    <div class="lessons-number text-center">
                                                                                        <h1>
                                                                                            <i class="fa fa-play-circle"></i>
                                                                                            {{$course->lessons->count()}}
                                                                                        </h1>
                                                                                    </div>
                                                                                    <!-- /.lessons-number -->
                                                                                </div>
                                                                                <!-- /.card-img -->
                                                                                <div class="card-data">
                                                                                    <div class="course_name text-right">
                                                                                        <h1>
                                                                                            <a href="/Theme/#">{{$course->name}} </a>
                                                                                        </h1>
                                                                                    </div>
                                                                                    <!-- /.course-name -->
                                                                                    <div class="course_setting text-right">
                                                                            <span class="course_date">
                                                                                <i class="fa fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($course->created_at)->translatedFormat('l j F Y ') }}
                                                                            </span>
                                                                                    </div>
                                                                                    <!-- /.course_setting -->
                                                                                    <div class="course_instructor-data">
                                                                            <span>
                                                                                <img src="/storage/{{$course->user->img}}" width="70" height="70" class="img-responsive">
                                                                            </span>
                                                                                        <a id="nn" onclick="coming()" style="cursor: pointer">
                                                                                            <i class="fa fa-user"></i>{{$course->user->name}}
                                                                                        </a>
                                                                                    </div>
                                                                                    <!-- /.course_instructor-data -->
                                                                                    <div class="corse-action">
                                                                                        <a href="" class="gonna-corse">
                                                                                            <i class="fa fa-paper-plane"></i> يرجا الانتظار لكي يتم تفعيل هذا الدوره
                                                                                        </a>
                                                                                        <a href="{{route('user.subscription.delete',['id'=>$course->id , 'user_id'=>auth()->user()->id] )}}" class="out-corse">
                                                                                            <i class="fa fa-sign-out"></i> إنسحاب من الدورة
                                                                                        </a>
                                                                                    </div>
                                                                                    <!-- /.corse-action -->
                                                                                </div>
                                                                                <!-- /.card-data -->

                                                                            </div>
                                                                            <!-- /.card-inner -->
                                                                        </div>
                                                                        <!-- /.card -->

                                                                @endforeach


                                                                <!-- /.card -->
                                                                </div>
                                                            @else
                                                                <div class="flash_empty text-center">
                                                                    <h1 class="animated shake">
                                                                        <i class="fa fa-frown-o"></i>
                                                                        عفواً لا يوجد لديك دورات في هذا القسم
                                                                    </h1>
                                                                </div>

                                                            @endif

                                                            <script>
                                                                function  coming(){
                                                                    var s= document.getElementById('nn')
                                                                    var div = document.getElementById('coming_show')
                                                                    var cv =document.getElementById('cv_coming_{{$courses->id}}')
                                                                    div.style.display='none'
                                                                    cv.style.display='block'
                                                                }
                                                                function back_coming(){
                                                                    var s= document.getElementById('nn')
                                                                    var div = document.getElementById('coming_show')
                                                                    var cv =document.getElementById('cv_coming_{{$courses->id}}')
                                                                    div.style.display='block'
                                                                    cv.style.display='none'

                                                                }
                                                            </script>

                                                        @endforeach
                                                    @else
                                                        <div class="flash_empty text-center">
                                                            <h1 class="animated shake">
                                                                <i class="fa fa-frown-o"></i>
                                                                عفواً لا يوجد لديك دورات في هذا القسم
                                                            </h1>
                                                        </div>

                                                @endif

                                                <!-- /.type -->
                                                </div>
                                                <!-- /#commingmy -->
                                                <div role="tabpanel" class="tab-pane fade" id="finishedmy">
                                                    @if(count($finish_courses) > 0)
                                                        @foreach($finish_courses as $scope)
                                                            @if(count($scope->courses) > 0)
                                                                @foreach($scope->courses as $courses)
                                                                    <div id="cv_finish_{{$courses->id}}" style="display: none">
                                                                        <div class="up-container">
                                                                            <div class="up-header text-center">
                                                                                <div class="container">
                                                                                    <h1>تعرف علي السيرة الذاتية لدي المدرب</h1>
                                                                                </div>
                                                                                <!-- /.container -->
                                                                            </div>
                                                                            <!-- /.up-header -->
                                                                            <div class="up-box">
                                                                                <div >
                                                                                    <div class="up-form">
                                                                                        @isset($courses->user->cv->cv)
                                                                                            <div class="privacy-box ">
                                                                                                {{$courses->user->cv->cv}}


                                                                                            </div>
                                                                                        @else
                                                                                            <div class="privacy-box ">
                                                                                                لايوجد سيرة ذاتيه حاليا لهذا المدرب


                                                                                            </div>

                                                                                        @endisset

                                                                                        <div class="up_form-item up-confirm" onclick="back_finish()">
                                                                                            <input type="submit" value="رجوع ">
                                                                                        </div>
                                                                                        <!-- /.privacy-box -->
                                                                                    </div>
                                                                                    <!-- /.up-form -->
                                                                                </div>
                                                                                <!-- /.container -->
                                                                            </div>
                                                                            <!-- /.up-box -->
                                                                        </div>

                                                                    </div>
                                                                @endforeach
                                                                <div class="type col-xs-12" id="finish_show">
                                                                    <div class="filtered-head text-right">
                                                                        <h1>
                                                                            <i class="fa fa-tags"></i>
                                                                            {{$scope->name}}
                                                                        </h1>
                                                                    </div>
                                                                    <!-- /.filtered-head -->
                                                                    @foreach($scope->courses as $course)
                                                                        <div class="card col-md-6 col-xs-12 pull-right">
                                                                            <div class="card-inner">
                                                                                <span class="corse-type">{{$course->scope->name}}</span>
                                                                                <div class="card-img">

                                                                                    <img src="/storage/{{$course->img}}" alt="" class="img-responsive">
                                                                                    <div class="lessons-number text-center">
                                                                                        <h1>
                                                                                            <i class="fa fa-play-circle"></i>
                                                                                            {{$course->lessons->count()}}
                                                                                        </h1>
                                                                                    </div>
                                                                                    <!-- /.lessons-number -->
                                                                                </div>
                                                                                <!-- /.card-img -->
                                                                                <div class="card-data">
                                                                                    <div class="course_name text-right">
                                                                                        <h1>
                                                                                            <a >{{$course->name}} </a>
                                                                                        </h1>
                                                                                    </div>
                                                                                    <!-- /.course-name -->
                                                                                    <div class="course_setting text-right">
                                                                            <span class="course_date">
                                                                                <i class="fa fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($course->created_at)->translatedFormat('l j F Y ') }}
                                                                            </span>
                                                                                    </div>
                                                                                    <!-- /.course_setting -->
                                                                                    <div class="course_instructor-data">
                                                                            <span>
                                                                                <img src="/storage/{{$course->user->img}}" width="70" height="70" class="img-responsive">
                                                                            </span>
                                                                                        <a id="nn" onclick="finish()" style="cursor: pointer">
                                                                                            <i class="fa fa-user"></i>{{$course->user->name}}
                                                                                        </a>
                                                                                    </div>
                                                                                    <!-- /.course_instructor-data -->
                                                                                    <div class="corse-action">
                                                                                        <a href="{{route('user.subscription.show',$course->id)}}" class="gonna-corse">
                                                                                            <i class="fa fa-paper-plane"></i> إذهب الي الدورة
                                                                                        </a>
                                                                                        <a href="{{route('user.subscription.delete',['id'=>$course->id , 'user_id'=>auth()->user()->id] )}}" class="out-corse">
                                                                                            <i class="fa fa-sign-out"></i> إنسحاب من الدورة
                                                                                        </a>
                                                                                    </div>
                                                                                    <!-- /.corse-action -->
                                                                                </div>
                                                                                <!-- /.card-data -->

                                                                            </div>
                                                                            <!-- /.card-inner -->
                                                                        </div>
                                                                        <!-- /.card -->

                                                                @endforeach


                                                                <!-- /.card -->
                                                                </div>
                                                            @else
                                                                <div class="flash_empty text-center">
                                                                    <h1 class="animated shake">
                                                                        <i class="fa fa-frown-o"></i>
                                                                        عفواً لا يوجد لديك دورات في هذا القسم
                                                                    </h1>
                                                                </div>

                                                            @endif

                                                            <script>
                                                                function  finish(){
                                                                    var s= document.getElementById('nn')
                                                                    var div = document.getElementById('finish_show')
                                                                    var cv =document.getElementById('cv_finish_{{$courses->id}}')
                                                                    div.style.display='none'
                                                                    cv.style.display='block'
                                                                }
                                                                function back_finish(){
                                                                    var s= document.getElementById('nn')
                                                                    var div = document.getElementById('finish_show')
                                                                    var cv =document.getElementById('cv_finish_{{$courses->id}}')
                                                                    div.style.display='block'
                                                                    cv.style.display='none'

                                                                }
                                                            </script>

                                                        @endforeach
                                                    @else
                                                        <div class="flash_empty text-center">
                                                            <h1 class="animated shake">
                                                                <i class="fa fa-frown-o"></i>
                                                                عفواً لا يوجد لديك دورات في هذا القسم
                                                            </h1>
                                                        </div>

                                                @endif

                                                <!-- /.type -->
                                                </div>

                                                <!-- /#finishedmy -->
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.my_courses-container -->
                                </div>
                                <!-- ./home_data -->
                            </div>
                            <!-- /.home-content -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="my_certf">

                            <div class="home-head">
                                <h1>
                                    <i class="fa fa-file"></i>
                                    الشهادات التي حصلت عليها من انهاء الدورات
                                </h1>
                            </div>
                            <!-- /.home-head -->
                            <div class="home-content pass-content col-xs-12">
                                <div class="home_data col-xs-12 pull-right text-right">
                                    <div class="home_data-item col-md-12  col-xs-12 pull-right">
                                        <div class="my-sertf">
                                            <ul>
                                                @foreach($certf as $certf)
                                                   @if(!$certf->CourseExam->Certificate_name == null)
                                                <li>
                                                    <h1>
                                                        <i class="fa fa-file"></i>
                                                        شهادة اتمام دورة {{$certf->CourseExam->name}}
                                                    </h1>
                                                    <a href="{{route('user.certf',['id'=>$certf->id , 'course_id'=>$certf->CourseExam->id])}}">
                                                        <i class="fa fa-cloud-download"></i> تحميل الشهادة
                                                    </a>
                                                </li>
                                                    @else
                                                        <div class="empty-msg text-center animated shake">
                                                            <h1>
                                                                <i class="fa fa-bell-slash"></i>
                                                                لا توجد شهادات حتي الآن
                                                            </h1>
                                                        </div>
                                                    @endif
                                                @endforeach

                                            </ul>
                                        </div>
                                        <!-- end my-certf -->
                                    </div>
                                    <!-- /.home_data-item -->
                                </div>
                                <!-- ./home_data -->
                            </div>
                            <!-- /.home-content -->
                        </div>
                    </div>
                    <!-- /.tap-content -->
                </div>
                <!-- /.left_tap-box -->
            </div>
            <!-- /.left_tap-box -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.profile-content -->

    <div class="courses">
        <div class="container">
            <div class="courses-head text-center">
                <h1>دوراتي للطالب</h1>
            </div>
            <!-- /.testominal-head -->
            <div class="row block-container">

                @foreach($paginate_courses as $course)
                <div class="block col-md-4">
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
                            @if($active->contains($course->id) || $unactive->contains($course->id))

                            <a href="{{route('user.subscription.show',$course->id)}}">
                                <i class="fa fa-eye"></i> مشاهدة الكورس
                            </a>
                            @else
                                <a href="{{route('user.courses.show',$course->id)}}">
                                    <i class="fa fa-eye"></i> اشتراك ف الكورس
                                </a>
                            @endif
                        </figcaption>
                    </figure>
                </div>
            @endforeach
                <!-- /.block -->

                <!-- /.block -->


            </div>
            <!-- /.row -->

            <div class="all-courses text-center">
                <a href="{{route('user.dashboard.index')}}">عرض جميع الكورسات</a>

            </div>
            <!-- /.all-courses -->

        </div>
        <!-- /.conainer -->
    </div>
    <!-- /.courses -->

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
<!-- /.wrapper -->

<div class="toTop col-xs-12 text-center">
    <i class="fa fa-angle-up"></i>
</div>
<!-- /.toTop -->


<!-- Javascript Files -->
<script src="/Theme/js/jquery-2.2.2.min.js" type="text/javascript"></script>
<script src="/Theme/js/bootstrap-checkbox.js" type="text/javascript"></script>

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
<script src="/Theme/js/jquery.selectric.min.js" type="text/javascript"></script>
<script src="/Theme/js/classie.js" type="text/javascript"></script>

<script>
    function peper(){
        var show_video = document.getElementsByClassName("up_peper");
        var peper_lesson = document.getElementsByClassName("peper_lesson");
        var pepper_linked = document.getElementsByClassName("pepper_linked");
        for (var i= 0 ; i<show_video.length ; i++){
            show_video.id= 'lesson' + i
            if (show_video[i].checked == true){
                peper_lesson[i].style.display='block';
                pepper_linked[i].style.display='none';
                pepper_linked[i].value = '';

            }else {
                peper_lesson[i].style.display='none';
                pepper_linked[i].style.display='block';


            }

        }





    }

    function lesson(){
        var show_video = document.getElementsByClassName("video_check");
        var video_lesson = document.getElementsByClassName("video_lesson");
    var input_lesson = document.getElementsByClassName("lesson_linked");
        console.log(input_lesson)


        for (var i= 0 ; i<show_video.length ; i++){
            show_video.id= 'lesson' + i
            if (show_video[i].checked == true){
                video_lesson[i].style.display='block';
                input_lesson[i].style.display='none';
                input_lesson[i].value = '';

            }else {
                video_lesson[i].style.display='none';
                input_lesson[i].style.display='block';


            }

        }








    }
    function n(){
        var show_video = document.getElementsByClassName("show_video");
        var video_pc = document.getElementsByClassName("video_pc");
        var input_link = document.getElementsByClassName("input_link");

        for (var i= 0 ; i<show_video.length ; i++){
            show_video.id= 'check' + i
            if (show_video[i].checked == true){
                video_pc[i].style.display='block';
                input_link[i].style.display='none';
                input_link[i].value = '';

            }else {
                video_pc[i].style.display='none';
                input_link[i].style.display='block';


            }

        }
    }

</script>



<script type="text/javascript">
    function exam(id){




        var parent= id.parentElement
        var add=  document.createElement('input');
        add.name="type[]"
        add.value='Wrong'
        add.type='hidden'


        if (id.checked == true){

            parent.firstElementChild.remove();
               id.value='Right'
                parent.className="btn active btn-success";
                parent.innerText="Right"
               parent.append(id)

        }else {
            if (id.checked== false ){
                console.log(add);
                id.value='Wrong';
                 parent.className="btn active btn-danger";
                 parent.innerText="Wrong"
                 parent.append(id)
                parent.prepend(add);



            }
        }

    }



</script>

<script>


    function cost() {
        var free = document.getElementsByClassName("free");
        var paid = document.getElementsByClassName("paid");
        console.log(free)

        var cost= document.getElementsByClassName('cost')
        var input_cost= document.getElementsByClassName('input_cost')



        // Get the checkbox
        for (var i=0; i<free.length; i++){
            free[i].id= 'free'+i;
            if (free[i].checked == true){
                console.log(free[i])
                cost[i].style.display='none'
                input_cost[i].value=''


            }  else if (paid[i].checked==true){
                cost[i].style.display='block'



            }}
        }
function  addalert (){
    var alrat_form = document.getElementsByClassName('alert-form');
    console.log(alrat_form);
    var alrat = document.getElementsByClassName('add-alert-form');
        for (var i = 0 ; i<alrat.length ; i++){
            alrat_form[i].style.display='block';
            alrat_form[i].style.top= '10%'


        }

    }
    function  deletealert (){
        var alrat_form = document.getElementsByClassName('add-alert-form');
        console.log(alrat_form);
        var alrat = document.getElementsByClassName('alert_form');
        for (var i = 0 ; i<alrat_form.length ; i++){
            alrat[i].style.display='none';
            alrat[i].style.top= '-100%'


        }

    }

    function  deletealert (){
        var message = document.getElementsByClassName('message-course');
        console.log(message);
        var alrat = document.getElementsByClassName('message-course_pop');
        for (var i = 0 ; i<message.length ; i++){
            alrat[i].style.display='none';
            alrat[i].style.top= '-100%'


        }

    }


        // If the checkbox is checked, display the output text



    function certif_cost (){

        var free = document.getElementsByClassName("free_certfi");
        var paid = document.getElementsByClassName("paid_certfi");
        var text = document.getElementsByClassName("certif_cost");
        var input=document.getElementsByClassName('input_ceritf');
        for (var i=0; i<free.length; i++){
            if (free[i].checked == true){
                text[i].style.display = "none";
                input[i].value='';
            }  else if (paid[i].checked==true){
                text[i].style.display = "block";


            }}
        };

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/js/bootstrap-datepicker.min.js" integrity="sha512-EJWtuxMZhtIxp4gt3ZfY96IkPgIS1Mt1HlL414ZIq8A9yztbA/52nl8rG0np4nP8ITFhZiYn6bla8+ru1CClmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/locales/bootstrap-datepicker.ar.min.js" integrity="sha512-rdmfDN1kbYc+OJTJsY9LCoXGUjuXaMwrUwBGdLmGs4g9MwdlgnFdfZPRMlFIOB9xTTyauBfAOV/R4BQDwqxg9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function (){
        $.fn.datepicker.defaults.language='ar';

    });
</script>



</body>

</html>
