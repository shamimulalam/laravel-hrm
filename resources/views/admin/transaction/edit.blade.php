@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-body">
                {{ Form::model($transaction,['route'=>['transaction.update',$transaction->id],'method'=>'PUT']) }}
                    @include('admin.transaction._form')
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Update Transaction</button>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection