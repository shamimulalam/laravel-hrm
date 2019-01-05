@extends('admin.layouts.master')
@section('content')

    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">{{ $title }}</h4>
        </div>
        <div class="col-sm-4 text-right m-b-30">
            <a href="{{ route('designation.create') }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Add New Designation</a>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px">
        {{ Form::model(request(),['method'=>'get']) }}
        <div class="col-sm-4">
            {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Designation name']) }}
        </div>
        <div class="col-sm-4">
            {{ Form::select('department_id',$departments,null,['class'=>'form-control','placeholder'=>'Select department']) }}
        </div>
        <div class="col-sm-2">
            {{ Form::select('status',['Active'=>'Active','Inactive'=>'Inactive'],null,['class'=>'form-control','placeholder'=>'Select status']) }}
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
                        <th>Department Name</th>
                        <th>Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($designations as $designation)

                        <tr>
                            <td>{{ $designation->id }}</td>
                            <td>{{ $designation->name }}</td>
                            <td>{{ $designation->relDepartment->name }}</td>
                            <td>{{ $designation->status }}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('designation.edit',$designation->id) }}" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                        <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                    {{ $designations->links() }}
            </div>
        </div>
    </div>
@endsection