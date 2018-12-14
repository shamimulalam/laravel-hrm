@include('admin.layouts._validation_messages')
<div class="form-group">
    <label>Department Name <span class="text-danger">*</span></label>
    {{ Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Please enter department name']) }}
</div>
<div class="form-group">
    <label>Status <span class="text-danger">*</span></label>
    {{ Form::label('status1','Active') }}
    {{ Form::radio('status','Active',null,['checked','required']) }}
    {{ Form::label('status2','Inactive') }}

    {{ Form::radio('status','Inactive',null,['required']) }}
</div>