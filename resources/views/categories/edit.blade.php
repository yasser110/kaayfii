{{--@extends(layouts)

@section('content')--}}

    <div><h2>{{__('Modification d,un categories')}}</h2></div>
    <div class="container">
<form action="{{route('update_categories',['id'=>$categories->id])}}" method="POST">
    @csrf
    @method('patch')
    <div>
        <input type="text" name="name" class="form-control" placeholder="le nom du category" value="{{$categories->name}}">
    </div>
    <div>
        <input type="text" name="type" class="form-control" placeholder="le type du category" value="{{$categories->type}}">
    </div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>

    </div>
{{-- @endsection --}}
