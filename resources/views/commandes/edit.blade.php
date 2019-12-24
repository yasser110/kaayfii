

<div><h2>{{__('Modification d,une commande')}}</h2></div>

<div class="container">
    <form action="{{route('update_commande',['id'=>$commandes->id])}}" method="POST">
        @csrf
        @method('patch')
        <div>
            <input type="text" name="num_commande" class="form-control" placeholder="le numero de le commande" value="{{$commandes->num_commande}}">
        </div>
        <div>
            <input type="text" name="pseudo_client" class="form-control" placeholder="Le pseudo du produit" value="{{$commandes->pseudo_client}}">
        </div>
        <div>
            <textarea name="liste_produits" type="text" cols="30" rows="10" class="form-control" placeholder="La description">
                {{$commandes->liste_produits}} </textarea>
        </div>
        <div>
            <input type="text" name="quantite_produits" class="form-control" placeholder="la quantite des produits" value="{{$commandes->quantity_produits}}">
        </div>
        <div>
            <input type="text" name="price_commande" class="form-control" placeholder="Le pseudo du produit" value="{{$commandes->price_commande}}">
        </div>
        <div>
        <div>
            <button class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>
