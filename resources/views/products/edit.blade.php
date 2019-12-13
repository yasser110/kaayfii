{{--@extends(layouts.app)

@section('content') --}}
    <div><h2>{{__('Modification d,un produit')}}</h2></div>

    <div class="container">
        <form action="{{route('update_produit',['id'=>$product->id])}}" method="POST">
            @csrf
            @method('patch')
            <div>
                <input type="text" name="name" class="form-control" placeholder="le nom du produit" value="{{$product->name}}">
            </div>
            <div>
                <input type="text" name="price" class="form-control" placeholder="Le prix du produit" value="{{$product->price}}">
            </div>
            <div>
            <textarea name="description" type="description" cols="30" rows="10" class="form-control" placeholder="La description">
                {{$product->description}} </textarea>
            </div>
            <div>
                <input type="category_id" name="category_id" class="form-control" placeholder="recuperer l,id du categorie" value="{{$product->category_id}}">
            </div>
            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
{{--
@endsection  --}}
