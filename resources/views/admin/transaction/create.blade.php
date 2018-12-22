@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-head">
                <h3>{{ $title }}</h3>
            </div>
            <div class="modal-body">
                {{ Form::open(['route'=>['transaction.store',$transaction_type]]) }}
                    @include('admin.transaction._form')
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Create Transaction</button>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection