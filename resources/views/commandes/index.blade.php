@extends('layouts.app')

@section('content')
    <div class="container">

<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>numero commande</th>
        <th>pseudo client</th>
        <th></th>
    </tr>
    @foreach($products as $product)
        <tr>
            <th>#</th>
            <th>{{$product->name}}</th>
            <th>{{$product->price}} {{ $product->category->name ?? '' }}</th>
            <th></th>
        </tr>
    @endforeach
</table>


    </div>
@endsection
