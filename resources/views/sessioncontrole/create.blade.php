@extends('layout.index')

@section('content')
    <div class="container" style="padding-top: 2%;">
        <form action="{{ route('sessioncontrole.store') }} " method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prix</label>
                <input type="text" name='price' class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Detail</label>
                <textarea name="details" id="" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="text" name="operation" class="form-control" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">En Stock</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
