@extends('layout')
 
@section('content')
    <div class="principal">
        <div class="container">

        
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Ea, consectetur cum odit sit quisquam itaque dolore ratione assumenda autem. 
            Quasi laboriosam veritatis velit a accusamus reiciendis animi ea sunt ab.</p>
            <div class="evenement">
                <div class="col-lg-12 margin-tb d-flex justify-content-between mb-2">
                    <div class="pull-left">
                        <h2>Events</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('events.create') }}"> Create New Event</a>
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
                    <th>Date</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($events as $event)  
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->date }}</td>
                    <td>
                        <form action="{{ route('events.destroy',$event->id) }}" method="POST">
        
                            <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Show</a>
            
                            <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>
        
                            @csrf
                            @method('DELETE')
            
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            
            <a class="btn btn-info" href="{{ route('guests.index') }}">Add guest</a>
            <a class="btn btn-info" href="{{ route('expences.index') }}">Add expences</a>

        </div>  
    </div>
@endsection