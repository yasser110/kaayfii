@extends('layouts.app')

@section('content')
    <div class="container">

        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Nom client</th>
                <th>Prix Produit</th>
                <th></th>
            </tr>
            @foreach($clients as $client)
                <tr>
                    <th>#</th>
                    <th>{{$client->name}} - <img src="{{$client->images ? asset($client->images) : asset('uploads/images/default.png')}}" alt="{{$product->name}}" width="50"></th>
                    <th>{{$client->price}} {{ $client->category->name ?? '' }}</th>
                    <th>
                        <p><a href="{{route('editer_client',['id'=>$client->id])}}" class="btn btn-primary">Editer</a>
                        </p>
                        <form action="client/{{$client->id}}" method="post">
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
