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
                <th>Name</th>
                <th>username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Status</th>
                <th>Cheng Status</th>

                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i=0
            @endphp
            @foreach($users as $user)
                <tr>

                    <td>{{++$i}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->role}}</td>
                    <td><span class="label label-success">{{$user->status}}</span></td>
                    <td>
                        <form  action="{{route('admin.status',$user->id)}}" method="POST" id="From-Status-{{$user->id}}" >
                            @csrf
                            <input type="hidden" name="id" value="{{$user-> id}}" />
                            <select class="form-select" aria-label="Default select example" onchange="this.form.submit()" name="status">
                                <option disabled selected>open this select</option>
                                <option value="active" {{$user->status == 'active' ? 'disabled selected' : ''}} >Active</option>
                                <option value="unactive"  {{$user->status == 'unactive' ? 'disabled selected' : ''}} >Un Active</option>

                            </select>

                            <br>

                        </form>
                        <br>
                        @if($user->status=='active')
                            <button type="button" class="btn btn-success">{{$user->status}}</button>
                        @endif
                        @if($user->status=='unactive')
                            <button type="button" class="btn btn-warning">{{$user->status}}</button>
                        @endif

                    </td>

                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <form action="{{route('admin.student.destroy',$user->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit"class="btn btn-danger"style="width:100px ;">Delete</button>


                                    </form>

                                    <li><a href="{{route('admin.instructor.edit',$user->id)}}" >&nbsp;&nbsp;&nbsp;<button type="button"class="btn btn-warning"style="width:100px ;" data-toggle="modal" data-target="#edit{{$user->id}}">دوراتي</button>  </a></li>

                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>


            @endforeach

            </tbody>
        </table>
    </div>
    <div>{{$users->links()}}</div>
    <!-- /basic datatable -->


@endsection
