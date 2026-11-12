@extends('default')
@section('title', 'List des utilisateurs')

@section('contenu')

    <h1>List des utilisateurs</h1>

    <table class="table">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>

        @foreach ($users as $u)
        <tr>
            <td> {{ $u->id }} </td>
            <td>{{ $u->name }} </td>
            <td>{{ $u->email }} </td>
        </tr>
        @endforeach



    </table>

@endsection
