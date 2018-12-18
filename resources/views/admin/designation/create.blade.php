@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-body">
                {{ Form::open(['route'=>'designation.store']) }}
                    @include('admin.designation._form')
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Create Designation</button>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection