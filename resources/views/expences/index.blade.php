@extends('layout')
 
@section('content')
    <div class="depense">
        <div class="col-lg-12 margin-tb d-flex justify-content-between mb-2">
            <div class="pull-left">
                <h2>Expence</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('expences.create') }}"> Create New Expence</a>
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
            <th>id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Guest id</th>
            <th>Event id</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($expences as $expence)  
        <tr>
            <td>{{ $expence->id }}</td>
            <td>{{ $expence->name }}</td>
            <td>{{ $expence->price }}</td>
            <td>{{ $expence->guest_id }}</td>
            <td>{{ $expence->event_id }}</td>
            
            <td>
                <form action="{{ route('expences.destroy',$expence->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('expences.show',$expence->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('expences.edit',$expence->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    <a class="btn btn-info" href="guests">Add guest</a>
      
@endsection