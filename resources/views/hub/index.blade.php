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
                    This view is loaded from module: {!! config('hub.name') !!}
                </p>
            </div>
            <div class="pull-right">                
                <a class="btn btn-primary" href="/"> Back</a>                
                <a class="btn btn-success" href="{{ route('hubs.create') }}"> Create New Hub</a>
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
            <th>Status</th>                
            <th width="280px">Action</th>
        </tr>
        @if(!empty($hubs))
        @foreach ($hubs as $hub)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $hub->name }}</td>
            <td>{{ $hub->status == '1' ? 'Active' : 'Deactive' }}</td>
            <td>
                <form action="{{ route('hubs.destroy',$hub->id) }}" method="POST">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
                    <a class="btn btn-info" href="{{ route('hubs.show', $hub->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('hubs.edit', $hub->id) }}">Edit</a>

                    {{ method_field('DELETE') }}
    
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $hubs->links() !!}
    @endif
</div>
@endsection
@section('javascript')

@endsection
