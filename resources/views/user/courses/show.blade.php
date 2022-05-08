@extends('user.layout.master')
@section('js')
    <script src="https://www.paypal.com/sdk/js?client-id={{env('paypal_sandbox_client_id')}}"></script>

@endsection
@section('content')
    <div class="intro-container">
        <div class="intro-head text-center">
            <div class="container">
                <h1>مقدمة في كورس {{$course->name}}</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-head -->
        <div class="intro-box">
            <div class="container">
                <div class="intro-name text-right">
                    <div class="name-head col-md-7 col-xs-12 pull-right">
                        <h1>مقدمة في كورس {{$course->name}}</h1>
                    </div>
                    <div class="extras col-md-5 col-xs-12">
                        @if($course->courses_type == 'free')


                        <span>مجانا</span>
                        @else
                            <span>مدفوع</span>
                            <span>{{$course->courses_cost}}</span>
                        @endif
                        <div class="intro-rating">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star-half-o"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end intro-rating -->
                    </div>
                </div>
                <!-- /.intro-name -->
                <div class="intro-video col-xs-12 text-center">
                    @if($course->video_link !== null)
                           <iframe width="100%" height="520" src="{{$course->video_link}}" frameborder="0" allowfullscreen></iframe>
                    @else
                    <video id="example_video_1" class="video-js vjs-default-skin" controls="true" width="100%" height="520" poster="images/3lom.jpg">
                        <source src="/storage/{{$course->video}}" type='video/mp4' />
                    </video>
                    @endif
                </div>
                <!-- /.intro-video -->
                <div class="intro-date col-xs-12 text-right">
                    <h1>
                        <i class="fa fa-calendar"></i>
                        من : 01 فبراير 2016 إلى : 27 ابريل 2016 (12 اسبوع)
                    </h1>

        @if(in_array(auth()->user()->gender , $course->gender_student ) )
            @if($course->courses_type == "free")
                      <form method="post" action="{{route('user.subscription.store')}}">
                          @csrf
                          <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                          <input type="hidden" name="course_id" value="{{$course->id}}">



                              <a style="cursor: pointer;" >
                                  <input type="submit"  value=" إشترك في الدورة">
                                  <i class="fa fa-paper-plane"></i>
                              </a>


                      </form>
                        @else
                            <a href="#" class="show-credit">
                                <i class="fa fa-paper-plane"></i> إشترك في الدورة
                            </a>
                        @endif

                    @else
                    <a href="{{route('user.profile')}}">
                        <i class="fa fa-cog"></i> ( النوع ) عدل ملفك الشخصي لتستطيع الاشتراك في الدورة
                    </a>
                    @endif

                </div>
                <!-- /.intro-date -->
                <div class="intro-details text-right">
                   <p>{{$course->courses_desc}}</p>
                </div>
                <!-- /.intro-details -->

                <div class="intro-extra col-xs-12">
                    <div class="intro-instructor col-md-6 col-xs-12 text-right pull-left">
                        <div class="intro_instructor-inner">
                            <h1>عن المدرس</h1>
                            <div class="avatar text-center">
                                <div class="av-inner">
                                    <img src="/storage/{{$course->user->img}}" alt="" width="80" height="80">
                                </div>
                                <!-- /.av-inner -->
                            </div>
                            <!-- /.avatar -->
                            <div class="instructor-data">
                                <a href="#" class="know-teacher" data-toggle="tooltip" data-placement="top" title="اضغط لمعرفة هوية المحاضر">{{$course->user->name}}</a>
                                @isset($courses->user->cv->cv)

                                <p>{{$course->user->cv->cv}}</p>
                                @else
                                    <p>                                        لايوجد سيرة ذاتيه حاليا لهذا المدرب
                                    </p>


                                @endisset
                            </div>
                            <!-- /.instructor-data -->
                        </div>
                        <!-- /.intro_instructor-inner -->
                    </div>
                    <!-- /.intro-instructor -->
                    <div class="intro-lec col-md-6 col-xs-12 text-right pull-right">
                        <div class="intro_lec-inner">
                            <h1>ماذا يحتوي هذا الكورس</h1>
                            <ol>
                                @if(isset($course->lessons) && count($course->lessons) >0 )
                               @foreach($course->lessons->sortBy('order') as $lessons)

                                <li>
                                    <i class="fa fa-play-circle"></i> {{$lessons->lesson_name}}
                                </li>
                                @endforeach
                                @else
                                    <li>
                                        <p> لايوجد دروس لهذه الدورة</p>
                                    </li>
                                    @endif
                            </ol>
                        </div>
                        <!-- /.intro_lec-inner -->
                    </div>
                    <!-- /.intro-lec -->
                </div>
                <!-- /.intro-extra -->
                <div class="panel-pop modal" id="instructor">
                    <div class="intro-instructor col-xs-12 text-right">
                        <div class="intro_instructor-inner">
                            <h1>عن المدرس</h1>
                            <div class="avatar text-center">
                                <div class="av-inner">
                                    <img src="/storage/{{$course->user->img}}" alt="" width="80" height="80">
                                </div>
                                <!-- /.av-inner -->
                            </div>
                             <!-- /.avatar -->
                            <div class="instructor-data">
                                <a>{{$course->user->name}}</a>
                                @isset($courses->user->cv->cv)

                                    <p>{{$course->user->cv->cv}}</p>
                                @else
                                    <p>                                        لايوجد سيرة ذاتيه حاليا لهذا المدرب
                                    </p>


                                @endisset
                            </div>
                            <!-- /.instructor-data -->
                        </div>
                        <!-- /.intro_instructor-inner -->
                    </div>
                    <!-- /.intro-instructor -->
                </div>
                <!-- /.modal -->

                <!-- =========================================================================================================================================== -->


                <div class="panel-pop modal payment-pop" id="payment">
                    <div>
                        <h1>
                            <i class="fa fa-shopping-cart"></i>
                            تأكيد الاشتراك في الكورس
                        </h1>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation">
                                <a href="#paypal" aria-controls="paypal" role="tab" data-toggle="tab">
                                    <i class="fa fa-paypal"></i> Paypal
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="credit-card">...</div>
                            <div role="tabpanel" class="tab-pane fade" id="paypal">

                                <div class="paypal-box text-center">
                                    <form action="{{route('user.paypal')}}" method="Post">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                        <input type="hidden" name="course_id" value="{{$course->id}}">
                                        <a style="cursor: pointer;" >
                                            <input type="submit"  value="تأكيد الدفع من خلال البايبال">

                                        </a>

                                    </form>
                                </div>
                                <!-- end paypal-box -->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.modal -->


            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-box -->
    </div>

@endsection
