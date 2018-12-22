@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-body">
                {{ Form::open(['route'=>['application_settings.update'],'files'=>true]) }}
                @include('admin.layouts._validation_messages')
                <fieldset>
                    <legend>Company Information</legend>
                    <div class="form-group">
                        <label>Company name <span class="text-danger">*</span></label>
                        {{ Form::text('company_name',$settings['company_name']->value,['class'=>'form-control','required','placeholder'=>'Company name']) }}
                    </div>
                    <div class="form-group">
                        <label>Logo </label>
                        {{ Form::file('logo',['class'=>'form-control','placeholder'=>'Logo']) }}
                    </div>
                </fieldset>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary">Update Company Setting</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection