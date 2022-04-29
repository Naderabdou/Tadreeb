@extends('admin.layout.Master')

@section('title')
    ALL Users
@endsection
@section('text')
    Users
@endsection
@section('name')
    Users
@endsection
@section('js')
    <script src="/admin/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="/admin/global_assets/js/plugins/forms/selects/select2.min.js"></script>


    <script src="/admin/global_assets/js/demo_pages/datatables_basic.js"></script>



@endsection
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <!-- Basic datatable -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"> users</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            The <code>users</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
        </div>

        <table class="table datatable-basic">
            <thead>
            <tr>
                <th>Id</th>
                <th>الاسم</th>
                <th>المتطلب السابق</th>
                <th>المجال</th>
                <th>وصف الدورة</th>
                <th>تاريخ البداية</th>
                <th>تاريخ النهاية</th>
                <th> الجنس المتوقع</th>
                <th> نوع الدورة</th>
                <th>تغير الحالة</th>





                <th class="text-center">العمليات</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i=0
            @endphp
            @foreach($courses as $course)
                <tr>

                    <td>{{++$i}}</td>
                    <td>{{$course->name}}</td>
                    <td>{{$course->prerequisite}}</td>
                    <td>{{$course->scope->name}}</td>
                    <td>{{$course->courses_desc}}</td>
                    <td>
                        <span>{{\Carbon\Carbon::parse($course->start_date)->translatedFormat('l j F Y ')}}</span>
                    </td>
                    <td>
                        <span>{{\Carbon\Carbon::parse($course->end_date)->translatedFormat('l j F Y ')}}</span>
                    </td>


                    <td>
                        @for($i=0; $i<count($course->gender_student) ; $i++)
                            <span>[{{$course->gender_student[$i]}}]</span>

                        @endfor
                    </td>
                    @if($course->courses_type == 'paid')

                        <td>
                            <span> مدفوع </span>
                            <span>{{$course->courses_cost}} </span>

                        </td>
                    @else
                        <td>
                            <span> مجانا </span>
                        </td>
                    @endif

                    <td>
                        <form  action="{{route('admin.status.course',$course->id)}}" method="POST" id="From-Status-{{$course->id}}" >
                            @csrf
                            <input type="hidden" name="id" value="{{$course-> id}}" />
                            <select class="form-select" aria-label="Default select example" onchange="this.form.submit()" name="status">
                                <option disabled selected>open this select</option>
                                <option value="active" {{$course->status == 'active' ? 'disabled selected' : ''}} >Active</option>
                                <option value="unactive"  {{$course->status == 'unactive' ? 'disabled selected' : ''}} >Un Active</option>

                            </select>

                            <br>

                        </form>
                        <br>
                        @if($course->status=='active')
                            <button type="button" class="btn btn-success">{{$course->status}}</button>
                        @endif
                        @if($course->status=='unactive')
                            <button type="button" class="btn btn-warning">{{$course->status}}</button>
                        @endif

                    </td>


                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <form action="{{route('admin.course.destroy',$course->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit"class="btn btn-danger"style="width:100px ;">Delete</button>

                                        <li><a href="{{route('admin.instructor.subscription',$course->id)}}" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button"class="btn btn-warning"style="width:100px ;" data-toggle="modal" data-target="#edit{{$course->id}}">الاشتراكات</button>  </a></li>


                                    </form>

                                </ul>

                            </li>
                        </ul>
                    </td>

                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
    <div>{{$courses->links()}}</div>
    <!-- /basic datatable -->


@endsection
