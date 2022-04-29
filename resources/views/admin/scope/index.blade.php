@extends('admin.layout.Master')
@section('title')
    Splash
@endsection
@section('js')
    <!-- Theme JS files -->
    <script src="/admin/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="/admin/global_assets/js/plugins/forms/selects/select2.min.js"></script>

    <script src="/admin/global_assets/js/demo_pages/datatables_basic.js"></script>
    <!-- /theme JS files -->
@endsection

@section('content')
    <!-- Trigger the modal with a button -->

    <div style="margin: 10px; ">
        <button style="border-radius: 50px" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">create new Interested  <i class="icon-plus2"></i></button>

    </div>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        {!! Form::open(['route' => 'admin.scope.store' , 'method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}

        @csrf

        @include('admin.scope.form')

        {!! Form::close() !!}

    </div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <!-- Basic datatable -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"> Interested</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>



        <table class="table datatable-basic">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i=0
            @endphp
            @foreach($scope as $scopes)
                <tr>


                    <td>{{++$i}}</td>
                    <td>{{$scopes->name}}</td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">

                                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <button type="button"class="btn btn-danger"style="width:100px ;" data-toggle="modal" data-target="#edit{{$scopes->id}}"> Edit <i class="icon-database-edit2"></i></button></li>
                                    <form action="{{route('admin.scope.destroy',$scopes->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit"class="btn btn-danger"style="width:100px ;">Delete</button>

                                    </form>

                                </ul>
                            </li>
                        </ul>
                    </td>

                </tr>
                <div id="edit{{$scopes->id}}" class="modal fade" role="dialog">
                    {!! Form::model($scopes, ['route' => ['admin.scope.update', $scopes->id],'class'=>'form-horizontal','method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

                    @csrf

                    @include('admin.scope.form')

                    {!! Form::close() !!}

                </div>
            @endforeach


            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->
@endsection
