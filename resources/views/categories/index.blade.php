@extends('layouts.app')

@section('content')
    <div class="container">

        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Nom categorie</th>
                <th>Type du Categorie</th>
                <th></th>
            </tr>
            @foreach($categories as $categorie)
                <tr>
                    <th>#</th>
                    <th>{{$categorie->name}}</th>
                    <th>{{$categorie->type}} {{ $categorie->category->name ?? '' }}</th>
                    <th></th>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{route('categories.create')}}" class="btn btn-primary">ajouter une categories</a>
        </div>
        <div class="row">
            @foreach($categories as $categorie)
                <div class="col-4"><h1>{{$categorie->name}}</h1></div>
             @endforeach
        </div>
        <p><a href="{{route('editer_categories',['id'=>$categorie->id])}}" class="btn btn-primary">Editer</a></p>
        <form action="categories/{{$categorie->id}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
        </form>
    </div>
@endsection
