

<div><h2>{{__('Modification d,un commercant')}}</h2></div>

<div class="container">
    <form action="{{route('update_commercant',['id'=>$trader->id])}}" method="POST">
        @csrf
        @method('patch')
        <div>
            <input type="text" name="username" class="form-control" placeholder="le login du commercant" value="{{$trader->username}}">
        </div>
        <div>
            <input type="text" name="email" class="form-control" placeholder="Lemail du commercant" value="{{$trader->email}}">
        </div>
        <div>
            <input type="text" name="phone" class="form-control" placeholder="Le tel du commercant" value="{{$trader->phone}}">
        </div>
        <div>
            <button class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>
