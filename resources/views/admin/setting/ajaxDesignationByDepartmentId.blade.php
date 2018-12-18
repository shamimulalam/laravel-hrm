<div class="form-group">
    <label>Designation Name <span class="text-danger">*</span></label>
    {{ Form::select('designation_id',$designations,null,['class'=>'form-control','id'=>'designationId','placeholder'=>'Select designation name','required']) }}
</div>