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
                    <h2>Add New Hub</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('hubs.index') }}"> Back</a>
                </div>
            </div>
        </div>
    
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible "  role="alert">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('hubs.store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status</strong>
                    <select class="form-control" name="status">
                        <option value="1">Active</option>
                        <option value="0">Dective</option>                        
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    
    </form>
</div>
@endsection
@section('javascript')

@endsection
