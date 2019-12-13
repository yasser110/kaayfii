@extends(layouts)

@section('content')
    <div class="container">
<form action="{{route('category.update',['id'=>$gategory->id])}}" method="post">
    @csrf
    @method('patch')
    <div>
        <input type="text" name="name" class="form-control" placeholder="le nom du category" value="{{$category->name}}">
    </div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>

<form action="{{route('update_category',['id'=>$product->id])}}
    " method="post">
    @csrf
    @method('patch')
    <div><input type="text" name="name" class="form-control" placeholder="le nom du category" value="{{$category->name}}"></div>
    <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$product->description}}</textarea> </div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
    </div>
@endsection
