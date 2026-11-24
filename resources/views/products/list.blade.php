@extends('default')

@section('title', 'products')

@section('contenu')
    <h1>liste des produits</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table">
        <tr>
            <th>id</th>
            <th>titre</th>
            <th>prix</th>
            <th>action</th>
        </tr>
        @foreach ($prds as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->titre }}</td>
                <td>{{ $p->prix }}</td>
                <td>
                    <a href="/product/{{ $p->id }}">visiter</a>
                    <a href="/products/edit/{{ $p->id }}">modifier</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
