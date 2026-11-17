@extends('default')

@section('title', 'products')

@section('contenu')
    <h1>liste des produits</h1>
    <table class="table">
        <tr>
            <th>id</th>
            <th>titre</th>
            <th>prix</th>
        </tr>
        @foreach ($prds as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->titre }}</td>
                <td>{{ $p->prix }}</td>
            </tr>
        @endforeach
    </table>
@endsection
