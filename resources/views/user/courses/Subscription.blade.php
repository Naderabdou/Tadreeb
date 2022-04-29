@extends('user.layout.master')
@section('css')

@endsection
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
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
                            <a href="{{route('user.subscription.show',$course->id)}}" class="active">
                                <i class="fa fa-tasks"></i> الدروس
                            </a>
                        </li>

                        <li>
                        <li>
                            <a href="{{route('user.comments.show',$course->id)}}">
                                <i class="fa fa-commenting-o"></i> النقاشات
                            </a>
                        </li>

                        <li>
                            <a href="{{route('user.alerts.show',$course->id)}}">
                                <i class="fa fa-bell"></i> التنويهات
                            </a>
                        </li>
                        <li>
                            <a href="#" class="add-fav" data-toggle="tooltip" data-placement="top" title="إضافة الي المفضلة">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="add-fav-dis" data-toggle="tooltip" data-placement="top" title="إضافة الي المفضلة">
                                <i class="fa fa-heart"></i>
                            </a>
                        </li>



                        @if(count($rating) == 0)
                        <li class="rating" data-toggle="tooltip" data-placment="top" title="إضافة تقييم للدورة" id="add_rate">
                            <ul>
                                <li>
                                    <a value="1" class="rate">
                                        <i class="fa fa-star "></i>
                                        <input type="hidden" name="course_id" value="{{$course->id}}" id="course_id" >
                                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}" id="user_id">

                                    </a>
                                </li>
                                <li>
                                    <a value="2" class="rate">
                                        <i class="fa fa-star "></i>
                                    </a>
                                </li>
                                <li>
                                    <a value="3" class="rate">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a value="4" class="rate">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a value="5" class="rate">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        @endif


                        @if(count($rating) >0)
                        <li class="rating" data-toggle="tooltip" data-placment="top" title=" تقييمك للدورة" style=" margin-top: 10px;" id="rating">
                            <ul  >

                                @for($i=0; $i<$count_rate; $i++)

                                    <li>
                                        <a  class="rate">
                                            <i class="fa fa-star active"></i>
                                        </a>
                                    </li>
                                @endfor

                            </ul>
                        </li>
                        @endif


                        <li class="rating" data-toggle="tooltip" data-placment="top" title=" تقييمك للدورة" style=" margin-top: 10px; display: none" id="rating">
                            <ul id="rate_list" >



                            </ul>
                        </li>

                    </ul>
                    <!-- =========================================================================================================================================== -->

                    <!-- /.modal -->

                    <!-- =========================================================================================================================================== -->

                    <!-- /.modal -->

                    <!-- =========================================================================================================================================== -->
                </div>
                <!-- end container -->
            </div>
            <!-- end corse-nav -->
            <div class="lesson-box text-right">
                <div class="container">
                    @if(in_array(auth()->user()->id,$id))
                    @if(! $course->Certificate_name == null)
                    <div class="certf text-center animated bounceIn">
                        <h1>تهانينا لقد  انتهيت من هذه الدورة بنجاح </h1>
                        <a href="{{route('user.profile')}}">
                            <i class="fa fa-print"></i> تستطيع طباعة الشهادة
                        </a>
                    </div>
                    @else
                        <div class="certf text-center animated bounceIn">
                            <h1>تهانينا لقد  انتهيت من هذه الدورة بنجاح </h1>

                        </div>
                    @endif
                    @endif

                    <!-- end certf -->
                    <!-- end empty-msg -->
                    @if(count($course->lessons) > 0)

                    <div class="week-module text-right">
                        <h1>
                            <i class="fa fa-tasks"></i>
                            الاسبوع الاول
                        </h1>
                    </div>
                    <!-- end week-moduke -->
                    <ul>
                        @foreach($course->lessons->sortBy('order') as $lessons)

                        <li>
                            <a href="{{route('user.lessons.show',$lessons->id)}}" class="lesson-det">
                                <i class="fa fa-play-circle"></i>
                                <span class="lesson-name">{{$lessons->lesson_name}}</span>
                            </a>
                            <h3>8 دقيقة</h3>
                            @if(auth()->user()->role == 'role' ||auth()->user()->role == 'both' )
                            <a href="#" class="del-lesson" data-toggle="tooltip" data-placement="top" title="حذف الدرس">
                                <i class="fa fa-trash"></i>
                            </a>
                            @endif

                        </li>
                        @endforeach
                        @else
                            <div class="empty-msg text-center animated shake">
                                <h1>
                                    <i class="fa fa-frown-o"></i>
                                    لا يوجد دروس الان  يمكنك الانتظار لكي يتم رفع دروس من قبل المدرب : {{$course->user->name}}
                                </h1>
                            </div>
                        @endif





                    </ul>
                        @if(!in_array(auth()->user()->id , $id))
                    @if(count($course->questions) > 0)
                    @foreach($course->lessons as $lesson)
             @if($lesson->users->where('id','=',auth()->user()->id)->count() == $course->lessons->count())
                    <div class="take-exam col-xs-12 text-center">
                        <a href="{{route('user.exam.show',$course->id)}}">
                            <i class="fa fa-file-text-o"></i> ابدا الاختبار الان
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endif
                        @endif
                    <!-- end take-exam -->
                </div>
                <!-- end container -->
            </div>
            <!-- end lesson-box -->
        </div>
        <!-- end corse-box -->

    </div>

@endsection
@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });
            $('.rate').on('click',function() {
                var user = $('#user_id').attr('value')
                var course = $('#course_id').attr('value')

                var query = $(this).attr('value');
                $.ajax({

                    url:"{{ route('user.rate') }}",

                    type:"GET",

                    data:{'name':query,
                          'user_id':user,
                           'course_id':course
                    },


                    success:function (data) {
                        $('#rating').css('display','block');
                        $('#add_rate').css('display','none');
                        $('#rate_list').html(data);







                    }
                })
                // end of ajax call
            });

        })

    </script>

@endsection

