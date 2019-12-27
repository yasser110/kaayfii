@extends('layouts.app')

@section('content')

    <div class="container">
        <div>
            <p><a href="{{route('categories.index')}}">{{__('Enregistrement d\'une category')}}</a></p>
        </div>
        <div class="container">
            <form action="{{route('categories.store')}}" method="post">
                @csrf

                <div>
                    <input type="text" name="name" class="form-control" placeholder="le nom du categories">
                </div>
                <div>
                    <input type="text" name="type" class="form-control" placeholder="Le type du categories">
                </div>
                <button class="btn btn-primary">Enregistrer</button>

            </form>
        </div>

@endsection
