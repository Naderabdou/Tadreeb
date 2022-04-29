@extends('user.layout.master')
@section('css')
    <style>
        @media print {
         #button_print{
             display: none;
         }
        }

    </style>
    @endsection
@section('content')
    <div class="up-container" id="print" >
        <div class="up-header print text-center" >
            <div class="container">
                <h1>مبروك لقد أتممت هذه الدورة بنجاح</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-header -->
        <div class="up-box" >
            <div class="container">
                <div class="up-form certf-container">
                    <div class="certficat-box text-center" id="Certification">
                        <h1>{{$certf->CourseExam->Certificate_name}}</h1>
                        <span>تمنح الي الطالب</span>
                        <h2>{{$certf->UserExam->name}}</h2>
                        <h4>لاجتيازه اختبار دورة</h4>
                        <p>{{$certf->CourseExam->name}}</p>

                        <div class="admin-log">
                            <div class="cer-date">
                                تاريخ
                            </div>
                            <div class="date">
                                {{ \Carbon\Carbon::parse($certf->created_at)->translatedFormat('l j F Y ') }}
                            </div>
                        </div>
                        <div class="admin-log1">
                            <div class="cer-date">
                                توقيع
                            </div>
                            <div class="date">
                                {{$certf->CourseExam->user->name}}
                            </div>
                        </div>
                        <div class="admin-log1">
                            <div class="cer-date">
                                التقدير
                            </div>
                            <div class="date">
                                {{$degree}}
                            </div>
                        </div>

                    </div>

                    <!-- end certificate-box -->
                </div>
                <!-- /.up-form -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-box -->
    </div>
    <div id="button_print" >
        <button class="btn btn-success btn-lg btn-block"   onclick="printDiv()"><i class="mdi mdi-printer ml-1">

            </i>طباعه</button>


    </div>

@endsection
@section('js')
    <script type="text/javascript">
        function printDiv(){
            var printContent = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML=originalContents;
            location.reload();



        }
    </script>
    @endsection
