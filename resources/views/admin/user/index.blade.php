@extends('admin.layouts.master')
@section('content')

    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">{{ $title }}</h4>
        </div>
        <div class="col-sm-4 text-right m-b-30">
            <a href="{{ route('user.create') }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Add New User</a>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px">
        {{ Form::open(['method'=>'get']) }}

        @php
            $name=null;
            if(isset($_GET['name'])){
                $name=$_GET['name'];
            }
            $type=null;
            if(isset($_GET['type'])){
                $type=$_GET['type'];
            }
            $email=null;
            if(isset($_GET['email'])){
                $email=$_GET['email'];
            }
            $status=null;
            if(isset($_GET['status'])){
                $status=$_GET['status'];
            }
        @endphp
        <div class="col-sm-3">
            {{ Form::text('name',$name,['class'=>'form-control','placeholder'=>'User name']) }}
        </div>
        <div class="col-sm-3">
            {{ Form::text('email',$email,['class'=>'form-control','placeholder'=>'Email']) }}
        </div>
        <div class="col-sm-2">
            {{ Form::select('type',['Admin'=>'Admin','Employee'=>'Employee'],$type,['class'=>'form-control','placeholder'=>'Select type']) }}
        </div>
        <div class="col-sm-2">
            {{ Form::select('status',['Active'=>'Active','Inactive'=>'Inactive'],$status,['class'=>'form-control','placeholder'=>'Select status']) }}
        </div>
        <div class="col-sm-2">
            {{ Form::submit('Search',['class'=>'btn btn-warning']) }}
        </div>
        {{ Form::close() }}
    </div>
    <div class="row">
        <div class="col-md-12">
            <div>
                <table class="table table-striped custom-table m-b-0 datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)

                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->relDepartment->name }}</td>
                            <td>{{ $user->relDesignation->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->status }}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('user.edit',$user->id) }}" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                        <li><a href="{{ route('payroll.manage',$user->id) }}" title="Payroll Manager"><i class="fa fa-pencil m-r-5"></i> Mange Payroll</a></li>
                                        <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection