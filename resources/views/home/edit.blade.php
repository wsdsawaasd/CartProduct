@extends('welcome')
@section('title','Edit Product')
@section('content')
    <div class="col-12 col-md-6">
        <div class="row">
            <div class="col-12">Edit Product</div>
            <div class="col-12">
                <form method="post" action="{{route('home.update',$product->id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$product->name}}" required>
                    </div>
                    <div class="form-group">
                        <label>price</label>
                        <input type="text" class="form-control" name="price" value="{{$product->price}}" required>
                    </div>
                    <div class="form-group">
                        <label>old_price</label>
                        <input type="text" class="form-control" name="old_price" value="{{$product->old_price}}"
                               required>
                    </div>
                    <input type="submit" class="btn btn-primary">
                    <button type="submit" class="btn btn-secondary" onclick="window.history.go(-1);return false">Back
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
