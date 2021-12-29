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
                <p>
                    This view is loaded from module: {!! config('vehicle.name') !!}
                </p>
            </div>
            <div class="pull-right">                
                <a class="btn btn-primary" href="/"> Back</a>                
                <a class="btn btn-success" href="{{ route('vehicles.create') }}"> Create New vehicle</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Hub</th>                
            <th width="280px">Action</th>
        </tr>
        @if(!empty($vehicles))
        @foreach ($vehicles as $vehicle)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $vehicle->name }}</td>
            <td>{{ $vehicle->hub->name }}</td>
            <td>
                <form action="{{ route('vehicles.destroy',$vehicle->id) }}" method="POST">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
                    <a class="btn btn-info" href="{{ route('vehicles.show', $vehicle->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('vehicles.edit', $vehicle->id) }}">Edit</a>

                    {{ method_field('DELETE') }}
    
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $vehicles->links() !!}
    @endif
</div>
@endsection
@section('javascript')

@endsection
