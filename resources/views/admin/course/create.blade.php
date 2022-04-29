@extends('admin.layout.Master')


@section('content')

    <div class="panel-body">

        <form class="form-horizontal" action="{{route('admin.course.store')}}" method="Post" enctype="multipart/form-data">
            @csrf
            <fieldset class="content-group">
                <legend class="text-bold">إنشاء دوره</legend>

                <div class="form-group">
                    <label class="control-label col-lg-2">عنوان الدورة</label>
                    <div class="col-lg-10">
                        <input type="text" placeholder="اضف عنوان الدورة" name="name" class="form-control">

                    </div>
                    @error('name')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">


                    <label class="control-label col-lg-2">المتطلب السابق</label>
                    <div class="col-lg-10">
                        <select name="prerequisite" class="form-control">
                            @foreach($course as $courses)
                                <option value="{{$courses->name}}">
                                    {{$courses->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('prerequisite')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">


                    <label class="control-label col-lg-2">المجال</label>
                    <div class="col-lg-10">
                        <select name="Scope_id" class="form-control">
                            @foreach($scope as $scopes)
                                <option value="{{$scopes->id}}">
                                    {{$scopes->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('Scope_id')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">


                    <label class="control-label col-lg-2">المدرب</label>
                    <div class="col-lg-10">
                        <select name="instructor_id" class="form-control">
                            @foreach($instructor as $instructors)
                                <option value="{{$instructors->id}}">
                                    {{$instructors->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('instructor_id')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">

                    <label  class="control-label col-lg-2">

                        <input type="checkbox"  onclick="n()" id="show_video" >
                        <span>اذا أردت رفع فيديو من جهازك الشخصي</span>
                    </label>
                    <div id="video" style="display: none" class=col-lg-10">
                        <span><i class="fa fa-video-camera"></i> ارفع فيديو من جهازك</span>
                        {!! Form::file('video',null,['class'=>'uploaded form-control']) !!}
                        @error('video')
                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-lg-10">
                        {!! Form::text('video_link',null,['placeholder'=>'ادخل رابط فيديو','class'=>'linked  form-control','id'=>'input_link']) !!}

                    </div>

                    @error('video_link')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">


                    <label class="control-label col-lg-2">وصف الدورة</label>
                    <div class="col-lg-10">
                        {!! Form::textarea('courses_desc',null,['placeholder'=>'اضف وصف الدورة', 'class'=>'form-control']) !!}

                    </div>
                    @error('courses_desc')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">


                    <label class="control-label col-lg-2">تاريخ البداية</label>
                    <div class="col-lg-10">
                        <div class='col-md-6'>
                            <div class="form-group">
                                <div class='input-group date'  name="start_date" data-date-format="yyyy-mm-dd"  data-provide="datepicker">
                                    {!! Form::text('start_date' , null  ,['class' => 'form-control' ,'id' => "datepicker", 'style' => "text-align:right;" , 'placeholder' => "تاريخ البدء"]) !!}
                                    <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                                </div>
                            </div>
                        </div>

                    </div>
                    @error('end_date')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">


                    <label class="control-label col-lg-2">تاريخ النهاية</label>
                    <div class="col-lg-10">
                        <div class='col-md-6'>
                            <div class="form-group">
                                <div class='input-group date'  name="end_date" data-date-format="yyyy-mm-dd"  data-provide="datepicker">
                                    {!! Form::text('end_date' , null  ,['class' => 'form-control' ,'id' => "datepicker", 'style' => "text-align:right;" , 'placeholder' => "تاريخ الانتهاء"]) !!}
                                    <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                                </div>
                            </div>
                        </div>

                    </div>
                    @error('end_date')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="control-label col-lg-2">الجنس المتوقع </label>
                    <div class="col-lg-10">
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

                <div class="form-group">


                    <label class="control-label col-lg-2">صوره الكورس</label>
                    <div class="col-lg-10">
                        {!! Form::file('img',null , ['class'=>'form-control']); !!}
                        @error('img')
                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                        @enderror


                    </div>

                </div>



                <div class="form-group">
                    <label class="control-label col-lg-2">نوع الدورة </label>
                    <div class="col-lg-10">
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

                    </div>
                    <div id="cost" style="display: none">
                        {{ Form::number('courses_cost', null,['data-toggle'=>'tooltip','data-placement'=>'top','title'=>'اضف سعر الدورة','step'=>'any']) }}
                        @error('courses_cost')
                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                        @enderror
                    </div>

                </div>











                <div class="form-group">
                    <label class="control-label col-lg-2"></label>

                    <div class="col-lg-10">
                        <input type="submit" class="form-control" value="انشاء">
                    </div>
                </div>

            </fieldset>
        </form>
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
