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
                <h2>Show Hub</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hubs.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $hub->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $hub->status == '1' ? 'Active' : 'Deactive' }}
            </div>
        </div>
       
    </div>
</div>
@endsection
@section('javascript')

@endsection
