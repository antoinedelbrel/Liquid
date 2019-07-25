@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
                <h2> {{ $event->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p>{{ $event->id }}</p>
                
                <p>{{ $event->date }}</p>
                
            </div>
        </div>            
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              
                <div class="guest">
                    @foreach ($event->guests as $guest)
                        <p>{{ $guest->name }}</p>
                        @foreach ($guest->expences as $expence)
                        
                            @if ($expence->event_id == $event->id)
                            <p>{{ $expence->name }} {{ $expence->price }}</p>
                            @endif
                            
                        @endforeach
                    @endforeach
                </div>
                <!-- <div id="expence">
                    @foreach ($event->expences as $expence)
                        <p>{{ $expence->name }} {{ $expence->price }} </p>
                    @endforeach
                </div> -->
            </div>
        </div>            
    </div>
@endsection