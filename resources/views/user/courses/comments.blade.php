@extends('user.layout.master')
@section('content')
    <div class="intro-container col-xs-12">
        <div class="intro-head text-center">
            <div class="container">
                <h1>{{$course->name}}</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-head -->

        <div class="corse-box col-xs-12">
            <div class="corse-nav text-center">
                <div class="container">
                    <ul>
                        <li>
                            <a href="{{route('user.subscription.show',$course->id)}}">
                                <i class="fa fa-tasks"></i> الدروس
                            </a>
                        </li>

                        <li>
                            <a href="{{route('user.comments.show',$course->id)}}" class="active">
                                <i class="fa fa-commenting-o"></i> النقاشات
                            </a>
                        </li>

                        <li>
                            <a href="{{route('user.alerts.show',$course->id)}}">
                                <i class="fa fa-bell"></i> التنويهات
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end container -->
            </div>
            <!-- end corse-nav -->
            @if(count($course->lessons) > 0)
                <div id="disqus_thread"></div>

            @else
                <div class="lesson-box text-right">
                    <div class="container">
                        <div class="comments-disqus">
                            <div class="empty-msg text-center animated shake">
                                <h1>
                                    <i class="fa fa-frown-o"></i>
                                    لا يوجد دروس الان ولكن يمكنك الانتظار لحين يتم رفع الدروس من قبل المدرب
                                </h1>
                            </div>
                            <!-- end empty-msg -->
                        </div>
                        <!-- end comments-disqus -->
                    </div>
                    <!-- end container -->
                </div>
        @endif


                <!-- end lesson-box -->
        </div>
        <!-- end corse-box -->

    </div>
    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = {{$course->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };

        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://tadreeb.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@endsection
