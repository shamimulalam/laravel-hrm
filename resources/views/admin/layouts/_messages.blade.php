@if(session()->has('success'))
<div class="alert alert-primary" role="alert">
    {{ session('success') }}
</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif