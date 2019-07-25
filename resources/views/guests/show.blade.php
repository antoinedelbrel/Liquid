@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
                <h2> {{ $guest->name }} </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('guests.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                
                <p>{{ $guest->email }}</p>
            </div>
        </div>     
    </div>
    <div id="recap">
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="guest form-group">
                    <div id="event">
                        @foreach ($guest->events as $event)
                            <p> {{ $event->name }} </p>
                            
                        @endforeach
                    </div>   
                    <div id="expence">
                        @foreach ($guest->expences as $expence)
                            <p> {{ $expence->name }} {{ $expence->price }}</p>
                        @endforeach
                    </div>
                </div>
            </div>     
        </div>
    </div>
@endsection