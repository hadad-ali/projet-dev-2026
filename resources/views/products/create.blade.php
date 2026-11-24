@extends('default')

@section('contenu')
    <h1>Nouveau produit</h1>

    <form action="{{ route('products.store') }}" method="POST">

        <label for="t">titre</label>
        <input type="text" id="t" name="tt"> <br>
        <label for="p">prix</label>
        <input type="number" id="p" name="pp"> <br>

        <input type="submit" value="Ajouter +">
    </form>
@endsection
