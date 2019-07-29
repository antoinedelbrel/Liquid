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
                    <div id="events">
                        @foreach ($guest->events as $event)
                            <div> {{ $event->name }} 
                                @foreach ($event->expences as $expence)
                                    @if ($expence->guest_id == $guest->id)
                                <div> {{ $expence->name }} {{ $expence->price}} </div>
                                    @endif
                                @endforeach   
                            </div>     
                        @endforeach
                    </div>   
                    <!-- <div id="expence">
                        @foreach ($guest->expences as $expence)
                            <p> {{ $expence->name }} {{ $expence->price }}</p>
                        @endforeach
                    </div> -->
                </div>
            </div>     
        </div>
    </div>
@endsection