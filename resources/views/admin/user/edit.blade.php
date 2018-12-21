@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-body">
                {{ Form::model($user,['route'=>['user.update',$user->id],'method'=>'PUT','files'=>true]) }}
                    @include('admin.user._form')
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Update User</button>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @include('admin.user._script')
@endsection