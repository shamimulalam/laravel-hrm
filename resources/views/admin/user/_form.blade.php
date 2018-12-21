@include('admin.layouts._validation_messages')
<fieldset>
    <legend>Personal Information</legend>
    <div class="form-group">
        <label>Name <span class="text-danger">*</span></label>
        {{ Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Please enter user name']) }}
    </div>
    <div class="form-group">
        <label>Date of Birth </label>
        {{ Form::date('dob',null,['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        <label>Contact Number <span class="text-danger">*</span></label>
        {{ Form::text('contact_number',null,['class'=>'form-control','required']) }}
    </div>
    <div class="form-group">
        <label>Address </label>
        {{ Form::textarea('address',null,['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        <label>Image</label>
        {{ Form::file('image',['class'=>'form-control']) }}
    </div>
</fieldset>

<fieldset>
    <legend>Official Information</legend>
    <div class="form-group">
        <label>User Type <span class="text-danger">*</span></label>
        {{ Form::select('type',['Admin'=>'Admin','Employee'=>'Employee'],null,['class'=>'form-control','placeholder'=>'Select user type','required']) }}
    </div>
    <div class="form-group">
        <label>Department Name <span class="text-danger">*</span></label>
        {{ Form::select('department_id',$departments,null,['class'=>'form-control','id'=>'departmentId','placeholder'=>'Select department name','required']) }}
    </div>
    <div id="designationDiv">
        <div class="form-group" id="oldDesignationList">
            <label>Designation Name <span class="text-danger">*</span></label>
            {{ Form::select('designation_id',$designations,null,['class'=>'form-control','id'=>'departmentId','placeholder'=>'Select designation name','required']) }}
        </div>
    </div>
</fieldset>

<fieldset>
    <legend>Login Information</legend>
    <div class="form-group">
        <label>Email <span class="text-danger">*</span></label>
        {{ Form::email('email',null,['class'=>'form-control','required']) }}
    </div>

        @php  $required='required'; @endphp
        @if(isset($user))
            @php  $required=null; @endphp
        @endif
    <div class="form-group">
        <label>Password @if(!isset($user))<span class="text-danger">*</span>@endif</label>
        {{ Form::password('password',['class'=>'form-control','id'=>'password',$required]) }}
        <div id="messageDiv" style="color: red"></div>
    </div>
    <div class="form-group">
        <label>Confirm Password  @if(!isset($user))<span class="text-danger">*</span>@endif</label>
        {{ Form::password('password_confirmation',['class'=>'form-control','id'=>'confirmPassword',$required]) }}
    </div>
</fieldset>
<div class="form-group">
    <label>Status <span class="text-danger">*</span></label>
    {{ Form::label('status1','Active') }}
    {{ Form::radio('status','Active',null,['checked','required']) }}
    {{ Form::label('status2','Inactive') }}

    {{ Form::radio('status','Inactive',null,['required']) }}
</div>