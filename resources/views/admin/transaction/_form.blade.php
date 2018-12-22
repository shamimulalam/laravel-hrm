@include('admin.layouts._validation_messages')

<div class="form-group">
    <label>Transaction Head <span class="text-danger">*</span></label>
    {{ Form::select('transaction_head_id',$transaction_heads,null,['class'=>'form-control','required','placeholder'=>'Select transaction head']) }}
</div>
<div class="form-group">
    <label>Client Name <span class="text-danger">*</span></label>
    {{ Form::text('client_name',null,['class'=>'form-control','required','placeholder'=>'Please enter client name']) }}
</div>
<div class="form-group">
    <label>Description <span class="text-danger">*</span></label>
    {{ Form::textarea('description',null,['class'=>'form-control','required','placeholder'=>'Please enter description']) }}
</div>
<div class="form-group">
    <label>Date <span class="text-danger">*</span></label>
    {{ Form::date('date',null,['class'=>'form-control','required']) }}
</div>
<div class="form-group">
    <label>Amount <span class="text-danger">*</span></label>
    {{ Form::number('amount',null,['class'=>'form-control','step'=>'.01','required','placeholder'=>'Please enter amount']) }}
</div>