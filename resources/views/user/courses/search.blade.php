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
                        <a href="#" class="show-cat" id="show-cat">{{$name}} <i class="fa fa-caret-down"></i></a>
                        <div class="hidden-cat">
                            <ul>
                                @foreach($scope as $scopes)
                                    <li class="scope">
                                        <a href="{{route('user.search',$scopes->id)}}" onclick="scope(this)" value="{{$scopes->name}}">{{$scopes->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /. cat-inner -->
                    <div class="cat-inner col-md-6 col-sm-6 col-xs-6 pull-left">
                        <form>
                            <input type="search" placeholder="ابحث عن كورسات أخري">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- /. cat-inner -->
                </div>
                <!-- /.cat-item -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.search-categories -->
        <div class="allcourses-body">
            <div class="container">
                <div class="row">
                    <div class="row block-container">
@if(count($courses) > 0  )
                        @foreach($courses as $course)
                            <div class="block col-md-4">
                                <figure>
                                    <div><img src="/storage/{{$course->img}}" alt="img05" class="img-responsive"></div>
                                    <figcaption class="text-right">
                                        <h1> اسم الكورس  :   <span>{{$course->name}}</span></h1>
                                        <h1>اسم المدرس  :   <span>{{$course->user->name}}</span></h1>
                                        <h1>عدد الطلبة المشتركة  :   <span>{{$course->user_sup->count()}}</span></h1>
                                        <h1>تاريخ بداية الكورس  :   <span>{{\Carbon\Carbon::parse($course->created_at)->translatedFormat('l j F Y ')}}</span></h1>
                                        <h1>تقييم الكورس :   </h1>
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
                    @else
                            <div class="flash_empty text-center">
                                <h1 class="animated shake">
                                    <i class="fa fa-frown-o"></i>
                                    عفواً لا يوجد لديك دورات في هذا القسم
                                </h1>
                            </div>
                    @endif

                        <!-- /.block -->



                    </div>
                    <!-- /.row -->
                </div>
                <div class="inner col-xs-12 text-center">
                    <ul class="pagination">

                    </ul>
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
            var li = document.getElementById('show-cat')
            console.log(li);
            li.innerText = itme.innerText
        }
    </script>


@endsection
