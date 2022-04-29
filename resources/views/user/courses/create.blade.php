@extends('user.layout.master')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker3.min.css" integrity="sha512-hqXYl9CoYMxIjFBLpbbcW8QhhAOTIBHbo4J5aHm/QkISuB/Qb/ew0LqG38p/i4kZftRs+FYFGd/4srg5x2wSog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="up-container">
        <div class="up-header text-center">
            <div class="container">
                <h1>إضافة دورة جديدة</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-header -->
        <div class="up-box">
            <div class="container">
                <div class="up-form">

                    <form action="{{route('user.courses.store')}}" method="POST" class="add-form" enctype="multipart/form-data">
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

                        </div>
                        <!-- /.up_form-item -->
                        <div class="up_form-item">
                            <h1>المجال</h1>
                            {!! Form::select('Scope_id',$scope,null, ['class'=>'form-control input-xlg']); !!}
                            @error('Scope_id')
                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                            @enderror

                        </div>
                        <!-- /.up_form-item -->
                        <div class="up_form-item">
                            <h1>رابط فيديو</h1>
                            <div class="add_cont text-right">
                                <div class="lecture-item">
                                    <div class="add_cont text-right">
                                        <label class="text-right">

                                            <input type="checkbox"  onclick="n()" id="show_video" >
                                            <span>اذا أردت رفع فيديو من جهازك الشخصي</span>
                                        </label>

                                        <div id="video" style="display: none"class="videoUploaded col-xs-12 text-right">
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
                            {!! Form::text('video_link',null,['placeholder'=>'ادخل رابط فيديو','class'=>'linked','id'=>'input_link']) !!}
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
                            <h1>نوع الدورة</h1>
                            <div class="add_cont text-right">
                                <label class="text-right">
                                    <input type="radio" name="courses_type" id="free"  onclick="cost()" value="free">
                                    <span>مجاني</span>
                                    @error('courses_type')
                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                    @enderror
                                </label>
                                <label class="text-right">
                                    <input type="radio" name="courses_type" id="paid" onclick="cost()" value="paid">
                                    <span>مدفوع</span>
                                    @error('courses_type')
                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                    @enderror
                                </label>
                                <div id="cost" style="display: none">
                                    {{ Form::number('courses_cost', null,['data-toggle'=>'tooltip','data-placement'=>'top','title'=>'اضف سعر الدورة','step'=>'any']) }}
                                    @error('courses_cost')
                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
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
                                            <input type="radio" name="Certification_type" id="free_certfi"  onclick="certif_cost()" value="free">
                                            @error('Certification_type')
                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                            @enderror
                                            <span>مجاني</span>
                                        </label>
                                        <label class="text-right">
                                            <input type="radio" name="Certification_type" id="paid_certfi"  onclick="certif_cost()" value="paid">
                                            @error('Certification_type')
                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                            @enderror
                                            <span>مدفوع</span>
                                        </label>
                                        <div id="certif_cost" style="display: none">
                                            {{ Form::number('Certification_cost', null,['data-toggle'=>'tooltip','data-placement'=>'top','title'=>'اضف سعر لشهادة','step'=>'any']) }}

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
                            <input type="submit" value="اضافة الدورة">
                        </div>

                    </form>

                </div>
                <!-- /.up-form -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-box -->
    </div>
    <script>

        function cost() {
            // Get the checkbox
            var free = document.getElementById("free");
            var paid = document.getElementById("paid");

            // Get the output text
            var text = document.getElementById("cost");

            // If the checkbox is checked, display the output text
            if (free.checked == true){
                text.style.display = "none";
            }  else if (paid.checked==true){
                text.style.display = "block";

            }}

            function certif_cost (){

                var free = document.getElementById("free_certfi");
                var paid = document.getElementById("paid_certfi");
                var text = document.getElementById("certif_cost");
                if (free.checked == true){
                    text.style.display = "none";
                }  else if (paid.checked==true){
                    text.style.display = "block";


            }}
        function n(){
            var checkbox= document.getElementById('show_video');
            var video= document.getElementById('video');
            var video_link=document.getElementById('input_link');

            if(checkbox.checked == true){
                video.style.display = 'block';
                video_link.style.display='none'
                video_link.value= '';
            }else {
                video.style.display = 'none'
                video_link.style.display = 'block'
                video.value='';
            }
        }
    </script>


@endsection
@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/js/bootstrap-datepicker.min.js" integrity="sha512-EJWtuxMZhtIxp4gt3ZfY96IkPgIS1Mt1HlL414ZIq8A9yztbA/52nl8rG0np4nP8ITFhZiYn6bla8+ru1CClmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/locales/bootstrap-datepicker.ar.min.js" integrity="sha512-rdmfDN1kbYc+OJTJsY9LCoXGUjuXaMwrUwBGdLmGs4g9MwdlgnFdfZPRMlFIOB9xTTyauBfAOV/R4BQDwqxg9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function (){
           $.fn.datepicker.defaults.language='ar';

        });
    </script>
@endsection
