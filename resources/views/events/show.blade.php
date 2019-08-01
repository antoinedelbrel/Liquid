@extends('layout')
@section('content')
    <div class="parents">
        <div class="container">

<!-- Faire une div pour chaque elements du parents, une pour le menu, une pour la barre de recherche,
et une pour le bouton back c'est a dire la partie droite. Mettre en display flex le tout avec un justify-content etc... 
et bien sur le mettre en responsive avec des media queries. -->

            <div class="menu margin-tb">
                <div class="pull-left text-left">
                    <h2 class="titre"> {{ $event->name }}</h2>
                    <span>{{ $event->date }}</span>
                </div>
                <div class="droite pull-right">
                    
                    <div class="recherche">
                        <input type="text" class="searchTerm" >
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
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