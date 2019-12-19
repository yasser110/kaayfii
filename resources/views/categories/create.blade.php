@extends('layouts')

@section('content')

    <div class="container">
        <div><p><a href="{{route('categories.index')}}">{{__('Enregistrement d\'un produit')}}</a></p></div>
        <div class="container">
            <form action="{{route('categories.store')}}" method="post">
                @csrf

                <div>
                    <input type="text" name="name" class="form-control" placeholder="le nom du categories">
                </div>
                <div>
                    <input type="text" name="type" class="form-control" placeholder="Le type du categories">
                </div>
                <div>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value=""></option>
                        @foreach($categories as $key => $value)
                            <option value="{{$key}}" {{ $key == $product->category_id ? 'selected="selected"':''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary">Enregistrer</button>

            </form>
        </div>

@endsection
