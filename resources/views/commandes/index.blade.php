@extends('layouts.app')

@section('content')
    <div class="container">

<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>numero commande</th>
        <th>pseudo client</th>
        <th>liste produits</th>
        <th>quantite produits</th>
        <th>price commande</th>
        <th>editer/supprimer</th>
        <th></th>
    </tr>
    @foreach($commandes as $commande)
        <tr>
            <th>#</th>
            <th>{{$commande->num_commande}}</th>
            <th>{{$commande->pseudo_client}}</th>
            <th>{{$commande->liste_produits}}</th>
            <th>{{$commande->quantite_produits}}</th>
            <th>{{$commande->price_commande}} {{ $commande->category->name ?? '' }}</th>
            <th>
                <p>
                    <a href="{{route('editer_commande',['id'=>$commande->id])}}" class="btn btn-primary">Editer</a>
                </p>
                <form action="commande/{{$commande->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                </form>

            </th>
        </tr>
    @endforeach
</table>

        <p>
            <a href="{{route('ajouter_commande')}}" class="btn btn-primary">ajouter</a>
        </p>


    </div>
@endsection


