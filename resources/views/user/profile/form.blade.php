<div class="container" style="margin-top: 20px">
    <div class="modal-content col-12">
        <div class="modal-header">
            <h4 class="modal-title">UPDATE PROFILE</h4>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="modal-body">
                        {!! Form::label(': الإسم بالكامل', ': الإسم بالكامل ',['class'=>'control-label ']) !!}
                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                        @error('name')
                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                        @enderror

                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="modal-body">
                        {!! Form::label(': إسم المستخدم', ': إسم المستخدم ',['class'=>'control-label ']) !!}
                        {!! Form::text('username',null,['class'=>'form-control']) !!}
                        @error('username')
                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                        @enderror

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 ">
                    <div class="modal-body">
                        {!! Form::label(': رقم الهاتف', ': رقم الهاتف ',['class'=>'control-label ']) !!}
                        {!! Form::text('phone',null,['class'=>'form-control']) !!}
                        @error('phone')
                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                        @enderror

                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="modal-body">
                        {!! Form::label(': البريد الإلكتروني', ': البريد الإلكتروني ',['class'=>'control-label ']) !!}
                        {!! Form::text('email',null,['class'=>'form-control']) !!}
                        @error('email')
                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                        @enderror

                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-6 ">
                    <div class="modal-body">
                        {!! Form::label(': المؤهل', ': المؤهل ',['class'=>'control-label ']) !!}
                        {!! Form::text('qualification',null,['class'=>'form-control']) !!}
                        @error('qualification')
                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                        @enderror

                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="modal-body">
                        {!! Form::label(': التخصص', ': التخصص ',['class'=>'control-label ']) !!}
                        {!! Form::text('Specialization',null,['class'=>'form-control']) !!}
                        @error('Specialization')
                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                        @enderror

                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6 ">
                    <div class="modal-body">
                        {!! Form::label(': مجال العمل', ': مجال العمل ',['class'=>'control-label ']) !!}
                        {!! Form::text('Employment',null,['class'=>'form-control']) !!}
                        @error('Employment')
                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                        @enderror

                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="modal-body">
                        {!! Form::label('الجنس', ': الجنس ',['class'=>'control-label ']) !!}
                        {!! Form::select('gender',['male'=>'ذكر','female'=>'مؤنث'], null, ['class'=>'form-control input-xlg']); !!}


                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-6">
                <div class="modal-body">
                    {!! Form::label('الصوره الشخصيه','الصوره الشخصيه') !!}
                    {!! Form::file('img',null,['class'=>'form-control']) !!}
                    @error('img')
                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                    @enderror

                </div>
            </div>
            </div>


            <div class="row">
                <div class="col-md-12 ">
                    <div class="modal-footer">
                        {!! Form::submit('save'); !!}

                        {!! Form::submit('close',[ 'data-dismiss'=>'modal']); !!}

                    </div>
                </div>
            </div>




        </div>
    </div>

</div>
