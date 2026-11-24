@extends('default')

@section('contenu')
    <h1>Modifier un produit</h1>

    <form action="{{ route('products.update') }}" method="POST">

        <input type="hidden" name="id"
         value="{{ $p->id }}">

        <label for="t">titre</label>
        <input type="text" id="t" name="tt"
         value="{{ $p->titre }}"> <br>

        <label for="p">prix</label>
        <input type="number" id="p" name="pp"
         value="{{ $p->prix }}"> <br>

        <input type="submit" value="Enregistrer">
    </form>
@endsection
