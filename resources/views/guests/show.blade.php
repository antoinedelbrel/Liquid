@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Guest</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('guests.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p>{{ $guest->name }}</p>
                <p>{{ $guest->email }}</p>
            </div>
        </div>     
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table class="table table-striped custab" id="tableau">
                    <tbody>
                    @foreach ($guest->expences as $expence)
                        <tr>
                            <td>
                            {{ $expence->name }}
                            {{ $expence->price }}
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>     
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table class="table table-striped custab" id="tableau">
                    <tbody>
                    @foreach ($guest->events as $event)
                        <tr>
                            <td>
                            {{ $event->name }}
                            {{ $event->date }}
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>     
    </div>
@endsection