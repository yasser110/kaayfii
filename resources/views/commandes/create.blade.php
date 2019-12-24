@extends('layouts.app')

@section('content')

<div class="container">
    <div><h1>{{__('Enregistrement d\'une commande')}}</h1></div>
    <div class="container">
        <form action="{{route('commandes.store')}}" method="post">
            @csrf
            <div>
                <input type="text" name="num_commande" class="form-control" placeholder="le numero de la commande">
            </div>
            <div>
                <input type="text" name="pseudo_client" class="form-control" placeholder="Le pseudo du clients">
            </div>
            <div>
                <textarea name="liste_produits" id="description" cols="30" rows="10" class="form-control" placeholder="La liste des produits"></textarea>
            </div>
            <div>
                <input type="text" name="quantite_produits" class="form-control" placeholder="La quantite des produits">
            </div>
            <div>
                <input type="text" name="price_commande" class="form-control" placeholder="Le prix de la commande">
            </div>
            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
@endsection
