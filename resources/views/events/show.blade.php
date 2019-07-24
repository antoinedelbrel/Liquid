@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
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
                <!-- <p>{{ $event->guest }}</p> -->
            </div>
        </div>            
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table class="table table-striped custab" id="tableau">
                    <tbody>
                        @foreach ($event->guests as $guest)
                        <tr>
                            <td>{{ $guest->name }}</td>
                        </tr>
                        @endforeach
                        @foreach ($event->expences as $expence)
                        <tr>
                            <td>{{ $expence->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>            
    </div>
@endsection