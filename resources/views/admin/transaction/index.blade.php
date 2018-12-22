@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">{{ $title }}</h4>
        </div>
        <div class="col-sm-4 text-right m-b-30">
            <a href="{{ route('transaction.create',$transaction_type) }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Add New {{ $transaction_type }}</a>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px">
        {{ Form::open(['method'=>'get']) }}
        @php
            $transaction_id=null;
            if(isset($_GET['transaction_id'])){
                $transaction_id=$_GET['transaction_id'];
            }
            $client_name=null;
            if(isset($_GET['client_name'])){
                $client_name=$_GET['client_name'];
            }
            $transaction_head_id=null;
            if(isset($_GET['transaction_head_id'])){
                $transaction_head_id=$_GET['transaction_head_id'];
            }
        @endphp
        <div class="col-sm-3">
            {{ Form::text('transaction_id',$transaction_id,['class'=>'form-control','placeholder'=>'Transaction ID']) }}
        </div>
        <div class="col-sm-4">
            {{ Form::text('client_name',$client_name,['class'=>'form-control','placeholder'=>'Client name']) }}
        </div>
        <div class="col-sm-3">
            {{ Form::select('transaction_head_id',$transaction_heads,$transaction_head_id,['class'=>'form-control','placeholder'=>'Select transaction head']) }}
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
                        <th>Transaction ID</th>
                        <th>Head</th>
                        <th>Client Name</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transactions as $transaction)

                        <tr>
                            <td>{{ $serial++ }}</td>
                            <td>{{ $transaction->transaction_id }}</td>
                            <td>{{ $transaction->relTransactionHead->name }}</td>
                            <td>{{ $transaction->client }}</td>
                            <td>{{ date('d M Y',strtotime($transaction->date)) }}</td>
                            <td>{{ $transaction->amount }}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    {{--<ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('transaction.edit',$transaction->id) }}" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                        <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                    </ul>--}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                    {{ $transactions->links() }}
            </div>
        </div>
    </div>
@endsection