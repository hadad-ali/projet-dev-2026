@extends('default')

@section('title', 'detail')

@section('contenu')
    <h1>{{ $p->titre }}</h1>
    <h2>prix : {{ $p->price }} dh</h2>
@endsection
