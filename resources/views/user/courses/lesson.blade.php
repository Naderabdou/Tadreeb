@extends('user.layout.master')
@section('css')
    <link href="/Theme/css/video-js.css" rel="stylesheet" type="text/css">

@endsection
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="intro-container">



        <div class="intro-head text-center" >
            <div class="intro-container col-xs-12">
                <!-- /.intro-head -->

                <div class="corse-box col-xs-12" style="margin-bottom: 25px; border-bottom: 50px">
                    <div class="corse-nav text-center">
                        <div class="container">
                            <ul>
                                <li>
                                    <a href="{{route('user.subscription.show',$lesson->course->id)}}">
                                        <i class="fa fa-tasks"></i> الدروس
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('user.comments.show',$lesson->course->id)}}" >
                                        <i class="fa fa-commenting-o"></i> النقاشات
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('user.alerts.show',$lesson->course->id)}}">
                                        <i class="fa fa-bell"></i> التنويهات
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end corse-nav -
                    end lesson-box -->
                </div>
                <!-- end corse-box -->

            </div>

<br>
            <div class="container">
                <h1>الدرس {{$lesson->order}} من  دورة {{$lesson->course->name}}</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-head -->
        <div class="corse-indv">
            <div class="container">
                <div class="mob-episodes col-xs-12">
                    <ul>
                        <li>
                            <h1>
                                <i class="fa fa-tasks"></i>
                                الاسبوع الاول
                            </h1>
                        </li>
                        <li>
                            <a href="#" class="active">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-play-circle"></i> الدرس الاول
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end mob-episodes -->
                <div class="corse_indv-video col-md-12 col-xs-12 text-center">
                    <div class="corse_indv-inner">
                        @if(!$lesson->video_link == null)
                          <iframe width="100%" height="520" src="{{$lesson->video_link}}" frameborder="0" allowfullscreen></iframe>
                        @else
                            <video id="example_video_1" class="video-js vjs-default-skin" controls="true" width="100%" height="420" poster="images/3lom1.jpg">
                                <source src="/storage/{{$lesson->video}}" type='video/mp4' />
                            </video>

                        @endif
                        <div class="finish-corse text-left col-xs-12">
                                @if( in_array(auth()->user()->id, $id) )
                                    <button  class="btn btn-success">  لقد انهيت هذا الدرس</button>
                                @else
                                    <form action="{{route('user.active.lesson')}}" method="post">
                                        @csrf
                                        <input name="user_id" type="hidden" value="{{auth()->user()->id}}">
                                        <input name="lesson_id" type="hidden" value="{{$lesson->id}}">
                                        <input name="course_id" type="hidden" value="{{$lesson->course->id}}">
                                        <input name="status" type="hidden" value="active">

                                        <button type="submit" class="btn btn-primary">  لقد انهيت هذا الدرس</button>


                                    </form>
                                @endif


                                    <div class="lesson-desc col-xs-12 text-right">
                                <h1>وصف المحاضرة</h1>

                                <p>{{$lesson->lesson_desc}}</p>
                            </div>
                        </div>
                        <!-- end finish-corse -->
                    </div>
                    <!-- end corse_indv-inner -->
                </div>
                <!-- end corse_indv-video -->

                <div class="corse-episodes col-md-3 col-xs-12 text-right">
<div class="corse_episodes-inner">
    <ul>
        <li>
            <h1>
                                    <i class="fa fa-tasks"></i>
                                    الاسبوع الاول
                                </h1>
        </li>
        @foreach($lesson->course->lessons as $lessons)
        <li>
            <a href="{{route('user.lessons.show',$lessons->id)}}" class="active">
                <i class="fa fa-play-circle"></i> {{$lessons->lesson_name}}
            </a>
        </li>
        @endforeach

    </ul>
</div>
</div>


                <div class="corse-comments col-xs-12">
                    <div class="disqus-comments">
                        <div class="empty-msg text-center animated shake">
<h1>
    <div id="disqus_thread"></div>

</h1>

                        </div>
                    </div>
                    <!-- end disqus-comments -->
                </div>
                <!-- end corse-comments -->
            </div>
            <!-- end container -->
        </div>
        <!-- end corse-indv -->
    </div>
    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = {{$lesson->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };

        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://laravel-comments-1.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@endsection
