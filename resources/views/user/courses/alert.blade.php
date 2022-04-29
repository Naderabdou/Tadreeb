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
                            <a href="{{route('user.comments.show',$course->id)}}">
                                <i class="fa fa-commenting-o"></i> النقاشات
                            </a>
                        </li>

                        <li>
                            <a href="{{route('user.alerts.show',$course->id)}}"  class="active">
                                <span class="padge">{{$course->alerts->count()}}</span>
                                <i class="fa fa-bell"></i> التنويهات
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end container -->
            </div>
            <!-- end corse-nav -->
            <div class="lesson-box text-right">
                <div class="container">
                    <div class="alert-box">
                        <div class="all-alerts col-xs-12 text-right">
                            @if(count($course->alerts) > 0)
                            <ul>
                                @php
                                    $i=0
                                @endphp
                                @foreach($course->alerts as $alerts)
                                <li>

                                    <h1>التعليق {{++$i}} من قبل {{$alerts->user->name}}</h1>
                                    <span> {{ \Carbon\Carbon::parse($alerts->created_at)->translatedFormat('l j F Y ') }}</span>
                                    <p>{{$alerts->body}}</p>
                                </li>
                                @endforeach

                            </ul>
                            @else
                                <div class="empty-msg text-center animated shake">
                                    <h1>
                                        <i class="fa fa-bell-slash"></i>
                                        لا توجد تعليقات حتي الان
                                    </h1>
                                </div>
                            @endif
                        </div>


                        <!-- end all-alerts -->


                        <!-- end empty-msg -->
                    </div>
                    <!-- end alert-box -->
                </div>
                <!-- end container -->
            </div>
            <!-- end lesson-box -->
        </div>
        <!-- end corse-box -->

    </div>

@endsection
