@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb d-flex justify-content-between mb-2">
            <div class="pull-left">
                <h2>Guests</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('guests.create') }}"> Create New Guest</a>
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
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($guests as $guest)  
        <tr>
            <td>{{ $guest->id }}</td>
            <td>{{ $guest->name }}</td>
            <td>{{ $guest->email }}</td>
            <td>
                <form action="{{ route('guests.destroy',$guest->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('guests.show',$guest->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('guests.edit',$guest->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    <a class="btn btn-info" href="expences">Add expences</a>
      
@endsection