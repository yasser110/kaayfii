@extends('layouts.app')

@section('content')
    <div class ="container">
        <div class="col-md-8">
            <div class="card"   ></div>
        </div>

    </div>
    <div class="container">
        <div class="col-12 row">
            @foreach($product as $product)
                <div class="col-4"><h1>{{$product->name}}</h1>
                </div>
            @endforeach

        </div>
    </div>

@endsection
