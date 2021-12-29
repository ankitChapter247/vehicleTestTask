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
                <h2>Edit Vehicle</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicles.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vehicles.update',$vehicle->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $vehicle->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="1" @if($vehicle->status == '1') 'selected' @endif>Active</option>
                        <option value="0" @if($vehicle->status == '0') 'selected' @endif>Dective</option>                        
                    </select>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label>Hubs</label>
                    <select class="form-control" name="hub_id">
                        @foreach($hubs as $hub)
                            <option value="{{ $hub->id }}" @if($vehicle->hub_id == $hub->id)  'selected' @endif>{{ $hub->name }}</option>
                        @endforeach
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
