@extends('layout')
@section('content')
    <div class="parents">
        <div class="container">
            <div class="menu col-lg-12 margin-tb">
                <div class="pull-left text-center">
                    <h2> {{ $guest->name }} </h2>
                    <span>{{ $guest->email }}</span>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary text-right" href="{{ route('guests.index') }}"> Back</a>
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
                            @foreach ($guest->events as $event)
                                <div class="guest"> <strong>{{ $event->name }}</strong> 
                                    <div class="expence-container">
                                        @foreach ($event->expences as $expence)
                                            <div class="expence-inner">
                                                @if ($expence->guest_id == $guest->id)
                                                    <div class="expence"> {{ $expence->name }} {{ $expence->price}} </div>
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