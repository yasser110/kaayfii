@extends('layouts.app')

@section('content')
    <div class="container">
<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>username commercant</th>
        <th>email</th>
        <th>telephone</th>
        <th>edition</th>
        <th></th>
    </tr>
    @foreach($traders as $trader)
        <tr>
            <th>#</th>
            <th>{{$trader->username}}</th>
            <th>{{$trader->email}}</th>
            <th>{{$trader->phone}}</th>
            <th>{{$trader->price}} {{ $trader->category->name ?? '' }}</th>
            <th>
                <p><a href="{{route('editer_commercant',['id'=>$trader->id])}}" class="btn btn-primary">Editer</a>
                </p>
                <form action="product/{{$trader->id}}" method="post">
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
