@extends('layout')
@section('content')
    <div class="menu row">
        <div class="menu col-lg-12 margin-tb">
            <div class="pull-left text-left">
                <h2> {{ $event->name }}</h2>
                <p>{{ $event->date }}</p>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary text-right" href="{{ route('events.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p>{{ $event->id }}</p>
                
            </div>
        </div>            
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              
                <div class="row event">
                    @foreach ($event->guests as $guest)
                        <div class="guest"><strong>{{ $guest->name }}</strong>
                              
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