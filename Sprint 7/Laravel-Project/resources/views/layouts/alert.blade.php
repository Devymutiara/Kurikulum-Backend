@if(session()->has('success'))
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        </div>
    </div>
</div>
@elseif(session()->has('error'))
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        </div>
    </div>
</div>
@elseif(session()->has('deleted'))
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-warning">
                {{ session()->get('deleted') }}
            </div>
        </div>
    </div>
</div>
@endif
