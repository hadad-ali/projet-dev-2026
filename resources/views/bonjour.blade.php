@extends('default')

@section('title', 'Bonjour')

@section('contenu')

    @isset($nom)
        <h1>Bonjour {{ $nom }}</h1>
    @else
        <h1>Bonjour</h1>
    @endisset
@endsection
