@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <a href="{{route('categories.create')}}" class="btn btn-primary">ajouter une categories</a>
        </div>
        <div class="row">
            @foreach($categories as $categorie)
                <div class="col-4"><h1>{{$categorie->name}}</h1></div>
             @endforeach
        </div>
        <p><a href="{{route('editer_categories',['id'=>$category->id])}}" class="btn btn-primary">Editer</a></p>
    </div>
@endsection
