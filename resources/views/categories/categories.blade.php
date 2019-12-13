@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('categories.store')}}">
            <div class="form-control">
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Valider</button>
            </div>
        </form>

    </div>
@endsection
