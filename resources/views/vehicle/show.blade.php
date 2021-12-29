@extends('dashboard.base')
@section('content')
<style>
label.error{
    color: red;
}
</style>
<div class="container" style="padding-top: 30px">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Vehicle</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicles.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $vehicle->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $vehicle->status == '1' ? 'Active' : 'Deactive' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hub:</strong>
                {{ $vehicle->hub ? $vehicle->hub->name : '' }}
            </div>
        </div>
        
    </div>
</div>
@endsection
@section('javascript')

@endsection
