@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Expence</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('expences.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p>{{ $expence->name }}</p>
                <p>{{ $expence->price }}</p>
            </div>
        </div>
    </div>
@endsection