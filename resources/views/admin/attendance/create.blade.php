@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-body">
                {{ Form::open(['route'=>['attendance.store'],'files'=>true]) }}
                @include('admin.layouts._validation_messages')
                <fieldset>
                    <legend>Upload bulk attendance</legend>
                    <div class="form-group">
                        <label>Attendance file </label>
                        {{ Form::file('attendance_file',['class'=>'form-control','placeholder'=>'Attendance file']) }}
                    </div>
                </fieldset>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary">Upload attendance</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection