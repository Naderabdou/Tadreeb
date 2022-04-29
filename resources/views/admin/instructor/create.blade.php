@extends('admin.layout.Master')
@section('content')
    <div class="panel-body">

        <form class="form-horizontal" action="{{route('admin.instructor.store')}}" method="Post">
            @csrf
            <fieldset class="content-group">
                <legend class="text-bold">انشاء مدرب</legend>

                <div class="form-group">
                    <label class="control-label col-lg-2">الإسم بالكامل</label>
                    <div class="col-lg-10">
                        <input type="text" placeholder="الإسم بالكامل" name="name" class="form-control">

                    </div>
                    @error('name')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">إسم المستخدم</label>
                    <div class="col-lg-10">
                        <input type="text" placeholder="إسم المستخدم" name="username" class="form-control">

                    </div>
                    @error('username')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">البريد الإلكتروني</label>
                    <div class="col-lg-10">
                        <input type="email" placeholder="البريد الإلكتروني" name="email" class="form-control">

                    </div>
                    @error('email')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">كلمة المرور</label>
                    <div class="col-lg-10">
                        <input type="password" placeholder="كلمة المرور" name="password" class="form-control">

                    </div>
                    @error('password')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">إعادة كلمة المرور</label>
                    <div class="col-lg-10">
                        <input type="password" placeholder="إعادة كلمة المرور" name="password_confirmation" class="form-control">

                    </div>
                    @error('password_confirmation')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="control-label col-lg-2">رقم الهاتف</label>
                    <div class="col-lg-10">
                        <input type="tel" placeholder="رقم الهاتف" name="phone" class="form-control">

                    </div>
                    @error('phone')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>






                <div class="form-group">
                    <label class="control-label col-lg-2">اختار بلدك</label>
                    <div class="col-lg-10">
                        <select class="form-control" name="city_id">
                            <option selected disabled>Select Your City</option>
                            @foreach ($countries as $country)

                                <option value="{{$country->id}}">{{$country->name}} - {{$country->code}}</option>

                            @endforeach

                        </select>
                    </div>
                    @error('city_id')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="control-label col-lg-2">الجنس</label>
                    <div class="col-lg-10">
                        <select name="gender" class="form-control">
                            <option>الجنس ...</option>
                            <option value="male">مذكر</option>
                            <option value="female">مؤنث</option>
                        </select>
                    </div>
                    @error('gender')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror
                </div>


                <input type="hidden" class="form-control" name="role" value="instructor">
                <input type="hidden" name="Privacy_policy" value="on">

                <div class="form-group">
                    <label class="control-label col-lg-2"></label>

                    <div class="col-lg-10">
                        <input type="submit" class="form-control" value="انشاء">
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
@endsection
