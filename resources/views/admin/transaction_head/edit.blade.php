@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-body">
                {{ Form::model($transaction_head,['route'=>['transaction-head.update',$transaction_head->id],'method'=>'PUT']) }}
                    @include('admin.transaction_head._form')
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Update Transaction Head</button>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection