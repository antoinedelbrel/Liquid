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
              
                <div class="row event">
                    @foreach ($event->guests as $guest)
                        <div class="guest">{{ $guest->name }}
                              
                            @foreach ($guest->expences as $expence)
                                
                                    @if ($expence->event_id == $event->id)
                                        <div class="expence">{{ $expence->name }} {{ $expence->price }}</div>
                                    @endif
                                            
                            @endforeach
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>            
    </div>
@endsection