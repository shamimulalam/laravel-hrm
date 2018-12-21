@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-body">
                {{ Form::model($payroll,['route'=>['payroll.update',$user_id],'method'=>'PUT']) }}
                @include('admin.layouts._validation_messages')
                <fieldset>
                    <legend>Payroll Information</legend>
                    <div class="form-group">
                        <label>Basic <span class="text-danger">*</span></label>
                        {{ Form::number('basic',null,['class'=>'form-control','required','step'=>'.01','placeholder'=>'Enter basic salary']) }}
                    </div>
                    <div class="form-group">
                        <label>House Rent <span class="text-danger">*</span></label>
                        {{ Form::number('house_rent',null,['class'=>'form-control','required','step'=>'.01','placeholder'=>'Enter house rent']) }}
                    </div>
                    <div class="form-group">
                        <label>Medical Allowance <span class="text-danger">*</span></label>
                        {{ Form::number('medical',null,['class'=>'form-control','required','step'=>'.01','placeholder'=>'Enter medical allowance']) }}
                    </div>
                    <div class="form-group">
                        <label>Travel Allowance <span class="text-danger">*</span></label>
                        {{ Form::number('travel_allowance',null,['class'=>'form-control','required','step'=>'.01','placeholder'=>'Enter travel allowance']) }}
                    </div>
                    <div class="form-group">
                        <label>Daily Allowance <span class="text-danger">*</span></label>
                        {{ Form::number('daily_allowance',null,['class'=>'form-control','required','step'=>'.01','placeholder'=>'Enter daily allowance']) }}
                    </div>
                    <div class="form-group">
                        <label>Provident Fund <span class="text-danger">*</span></label>
                        {{ Form::number('provident_fund',null,['class'=>'form-control','required','step'=>'.01','placeholder'=>'Enter provident fund']) }}
                    </div>
                    <div class="form-group">
                        <label>Gross <span class="text-danger">*</span></label>
                        {{ Form::number('gross',null,['class'=>'form-control','required','step'=>'.01','placeholder'=>'Enter gross salary']) }}
                    </div>
                </fieldset>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary">Update Payroll</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection