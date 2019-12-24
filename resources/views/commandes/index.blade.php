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
        <th></th>
    </tr>
    @foreach($commandes as $commande)
        <tr>
            <th>#</th>
            <th>{{$commandes->num_commande}}</th>
            <th>{{$commandes->pseudo_client}}</th>
            <th>{{$commandes->liste_produits}}</th>
            <th>{{$commandes->quantite_produits}}</th>
            <th>{{$commandes->price_commande}} {{ $commandes->category->name ?? '' }}</th>
            <th>
                <p>
                    <a href="{{route('editer_commande',['id'=>$commandes->id])}}" class="btn btn-primary">Editer</a>
                </p>
                <form action="commande/{{$commandes->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                </form>

            </th>
        </tr>
    @endforeach
</table>


    </div>
@endsection
