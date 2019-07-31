@extends('layout')
@section('content')
    <div class="parents">
        <div class="container">

            <div class="menu col-lg-12 margin-tb">
                <div class="pull-left text-left">
                    <h2> {{ $event->name }}</h2>
                    <span>{{ $event->date }}</span>
                </div>
                <div class="droite pull-right">
                    
                    <input type="text" class="searchTerm" >
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                    
                    <a class="btn btn-primary " href="{{ route('events.index') }}"> Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="contenu">
        <div class="container">        
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <div class="row event">
                            @foreach ($event->guests as $guest)
                                <div class="guest">
                                    <div class="invite">
                                        <strong>{{ $guest->name }}</strong>
                                    </div>
                                    <div class="expence-container">
                                        @foreach ($guest->expences as $expence)
                                            <div class="expence-inner">
                                                @if ($expence->event_id == $event->id)
                                                    <div class="expence">{{ $expence->name }} {{ $expence->price }}</div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
@endsection