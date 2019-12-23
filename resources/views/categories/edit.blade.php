{{--@extends(layouts)

@section('content')--}}

    <div><h2>{{__('Modification d,un categories')}}</h2></div>
    <div class="container">
<form action="{{route('categories.update',['id'=>$gategorie->id])}}" method="post">
    @csrf
    @method('patch')
    <div>
        <input type="text" name="name" class="form-control" placeholder="le nom du category" value="{{$categorie->name}}">
    </div>
    <div>
        <input type="text" name="type" class="form-control" placeholder="le type du category" value="{{$categorie->type}}">
    </div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>

    </div>
{{-- @endsection --}}
