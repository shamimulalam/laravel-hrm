@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">{{ $title }}</h4>
        </div>
        <div class="col-sm-4 text-right m-b-30">
            <a href="{{ route('transaction-head.create') }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Add New Transaction Head</a>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px">
        {{ Form::open(['method'=>'get']) }}

        @php
            $name=null;
            if(isset($_GET['name'])){
                $name=$_GET['name'];
            }
            $status=null;
            if(isset($_GET['status'])){
                $status=$_GET['status'];
            }
            $type=null;
            if(isset($_GET['type'])){
                $type=$_GET['type'];
            }
        @endphp
        <div class="col-sm-4">
            {{ Form::text('name',$name,['class'=>'form-control','placeholder'=>'Transaction Head name']) }}
        </div>
        <div class="col-sm-4">
            {{ Form::select('type',['Income'=>'Income','Expense'=>'Expense'],$type,['class'=>'form-control','placeholder'=>'Select transaction type']) }}
        </div>
        <div class="col-sm-2">
            {{ Form::select('status',['Active'=>'Active','Inactive'=>'Inactive'],$status,['class'=>'form-control','placeholder'=>'Please select status']) }}
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
                        <th>Type</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transaction_heads as $transaction_head)

                        <tr>
                            <td>{{ $transaction_head->id }}</td>
                            <td>{{ $transaction_head->type }}</td>
                            <td>{{ $transaction_head->name }}</td>
                            <td>{{ $transaction_head->status }}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('transaction-head.edit',$transaction_head->id) }}" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                        <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                    {{ $transaction_heads->links() }}
            </div>
        </div>
    </div>
@endsection