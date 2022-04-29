@extends('user.layout.master')
@section('js')

    <script src="/Theme/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <script type="text/javascript">

        $('#tabsleft').bootstrapWizard({
            'tabClass': 'nav nav-tabs',
            'debug': false,
            onTabShow: function (tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#tabsleft .progress-bar').css({
                    width: $percent + '%'
                });

                // If it's the last tab then hide the last button and show the finish instead
                if ($current >= $total) {
                    $('#tabsleft').find('.pager .next').hide();
                    $('#tabsleft').find('.pager .finish').show();
                    $('#tabsleft').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#tabsleft').find('.pager .next').show();
                    $('#tabsleft').find('.pager .finish').hide();
                }

            }
        });


    </script>


@endsection
@section('content')
    <div class="up-container">
        <div class="up-header text-center">
            <div class="container">
                <h1>دورة البرمجة بلغة الجافا</h1>
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
                    <div id="tabsleft" class="tabbable tabs-left">
                        <ul>
                            @php
                            $i=0;
                            $x=0;
                            @endphp
                            @foreach($questions as $question)
                            <li><a href="#tabsleft-tab{{++$i}}" data-toggle="tab">الخطوة {{++$x}}</a></li>
                            @endforeach
                        </ul>
                        <div id="bar" class="progress progress-info progress-striped">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                        </div>
                        <form action="{{route('user.answer')}}" method="post">
                            @csrf
                            <div class= "tab-content" id="tab-content">

                                @php
                                    $z=0;
                                    $a=0;
                                @endphp



                                @foreach($questions as $question)

                                    <div class="tab-pane" id="tabsleft-tab{{++$z}}">
                                        <div class="quest text-right">
                                            <div class="quest-head">
                                                <input type="hidden" name="question[]" value="{{$question->id}}">
                                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                                <input type="hidden" name="course_id" value="{{$question->courses->id}}">


                                                <h1>{{$question->question}} ؟</h1>
                                            </div>
                                            <!-- end quest-head -->
                                            <div class="quest-answers">
                                                @foreach($question->answer as $answer)
                                                    <div class="answer">
                                                        <label>
                                                            <input type="checkbox" name="answer[]"  class="answer_id" id="make-answer" value="{{$answer->id}}" >
                                                            <span>{{$answer->answer}}</span>
                                                            @error('answer')
                                                            <div class="alert alert-danger my-2" role="alert">الرجاء اختيار أجابه واحده علي الأقل  </div>
                                                            @enderror
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- end quest-answers -->
                                        </div>
                                        <!-- end quest -->
                                    </div>


                                @endforeach

                                <ul class="pager wizard">
                                    <!--                        <li class="previous first"><a href="javascript:;">First</a></li>-->
                                    <li class="previous"><a href="javascript:;">الخطوة السابقة</a></li>
                                    <!--                        <li class="next last"><a href="javascript:;">Last</a></li>-->
                                    <li class="next"><a href="javascript:;">الخطوة التالية</a></li>

                                    <li class="next finish" style="display:none;">
                                        <a>
                                            <button type="submit">انهاء</button>
                                        </a></li>
                                </ul>

                            </div>

                        </form>
                    </div>
                </div>
                <!-- /.up-form -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-box -->
    </div>

@endsection
