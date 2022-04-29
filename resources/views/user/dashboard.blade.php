@extends('user.layout.master')

@section('content')
    <div class="allcourses-box">
        <div class="allcourses-head text-center">
            <div class="container">
                <h1>جميع الكورسات</h1>
                <!-- /.nav-user -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.allcourses-head -->
        <div class="search-categories text-center">
            <div class="container">
                <div class="cat-item">
                    <div class="cat-inner col-md-6 col-sm-6 col-xs-6 pull-right">
                        <a href="#" class="show-cat" id="show-cat">برجا اختيار اهتمام <i class="fa fa-caret-down"></i></a>
                        <div class="hidden-cat">
                            <ul>
                                @foreach($scope as $scopes)
                                    <li >
                                        <button onclick="scope(this)">x</button>
                                        <a  class="scope fouc" value="{{$scopes->id}}" >

                                            {{$scopes->name}}</a>


                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /. cat-inner -->
                    <div class="cat-inner col-md-6 col-sm-6 col-xs-6 pull-left">

                            <input type="search" placeholder="ابحث عن كورسات أخري" name="name" id="name">
                            <button >
                                <i class="fa fa-search"></i>
                            </button>

                    </div>
                    <!-- /. cat-inner -->
                </div>
                <!-- /.cat-item -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.search-categories -->
        <div class="allcourses-body" id="course_list">
            <div class="container">
                <div class="row">
                    <div class="row block-container  " >

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



                    </div>
                    <!-- /.row -->
                </div>
                <div class="inner col-xs-12 text-center" id>
                    <ul class="pagination">
                        {{ $paginate_courses->links() }}

                    </ul>
                </div>

                <!-- /.row -->

                <!-- end inner -->

            </div>
            <!-- /.container -->
        </div>


        <div class="allcourses-body">
            <div class="container">
                <div class="row">
                    <div class="row block-container " id="name_list">


                    <!-- /.block -->



                    </div>
                    <!-- /.row -->
                </div>

                <!-- /.row -->

                <!-- end inner -->

            </div>
            <!-- /.container -->
        </div>

        <!-- /.allcourses-body -->
    </div>
    <script>


        function scope (itme){
            document.getElementById('course_list').style.display='block'
            document.getElementById('name_list').style.display='none'

        }



    </script>


@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });
        $('#name').on('keyup',function() {
            var query = $(this).val();
            $.ajax({

                url:"{{ route('user.search.name') }}",

                type:"POST",

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
        $('.scope').on('click',function() {
            var check= $(this).addClass('clicked');

            var query = $(this).attr('value');
            $.ajax({

                url:"{{ route('user.search') }}",

                type:"POST",

                data:{'name':query},


                success:function (data) {

                    $('#course_list').css('display','none')
                    $('#name_list').css('display','block')

                    $('#name_list').html(data);





                }
            })
            // end of ajax call
        });

    })

</script>

@endsection
