<html>
<head>
    <title> الحصول علي شهادة اتمام الدورة </title>
    <meta name="author" content="Amir Nageh">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
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

    @stack('css')
</head>
<body>
<div class="up-container">
    <div class="up-header text-center">
        <div class="container">
            <h1>مبروك لقد أتممت هذه الدورة بنجاح</h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-header -->
    <div class="up-box">
        <div class="container">
            <div class="up-form certf-container">
                <div class="certficat-box text-center" id="Certification">
                    <h1>{{$certf->CourseExam->name}}</h1>
                    <span>تمنح الي الطالب</span>
                    <h2>{{$certf->UserExam->name}}</h2>
                    <h4>لاجتيازه اختبار دورة</h4>
                    <p>{{$certf->CourseExam->name}}</p>

                    <div class="admin-log">
                        <div class="cer-date">
                            تاريخ
                        </div>
                        <div class="date">
                            {{ \Carbon\Carbon::parse($certf->created_at)->translatedFormat('l j F Y ') }}
                        </div>
                    </div>
                    <div class="admin-log1">
                        <div class="cer-date">
                            توقيع
                        </div>
                        <div class="date">
                            {{$certf->CourseExam->user->name}}
                        </div>
                    </div>

                </div>

                <!-- end certificate-box -->
            </div>
            <!-- /.up-form -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-box -->
</div>

</body>

</html>

