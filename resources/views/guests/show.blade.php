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
                
                <p>{{ $guest->email }}</p>
            </div>
        </div>     
    </div>
    <div id="recap">
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <table class="table table-striped custab" id="tableau">
                        <thead>
                        @foreach ($guest->events as $event)
                            <tr class="text-center">
                                <th>
                                    {{ $event->name }}  
                                </th>
                                <th>
                                    {{ $guest->name }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guest->expences as $expence)
                            <tr class="text-center">
                                <td>
                                    <p>{{ $event->date }}</p>
                                </td>
                                <td>
                                    <p>{{ $expence->name }}</p>
                                    <P>{{ $expence->price }}</P>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>     
        </div>
    </div>
@endsection