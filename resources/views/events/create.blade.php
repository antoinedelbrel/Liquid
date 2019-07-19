@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Event</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>
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

<form action="{{ route('events.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="text" id="date" name="date" class="form-control" placeholder="Date">
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="guests">Guests:</label>
                <!-- <select name="guest" id="guest">  -->
                    @foreach ($guests as $guest)
                    <!-- <option value="{{ $guest->id }}">{{ $guest->name }}</option> -->
                    
                    <input type="checkbox" value="{{ $guest->id }}" name="guest[]" id="case" checked="checked" > 
                    <label for="guest">{{ $guest->name }}</label> 
                    @endforeach 
                <!-- </select>  -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="bouton" class="btn btn-success">Add expences</button>

            <table class="table" id="tableau">
                <thead>
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Guest
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="newExpence">
                        <td>
                            <input class="name" type="text" name="name">
                        </td>
                        <td>
                            <input class="price" type="number" name="price">
                        </td>
                        <td>
                            @foreach ($guests as $guest)
                            <input type="checkbox" value="{{ $guest->id }}" name="guest[]" id="case">
                            <label for="guest">{{ $guest->name }}</label>
                            @endforeach
                        </td>
                        <td>
                            <button id="delete" class="btn btn-danger delete-task">-</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
   
</form>

@endsection