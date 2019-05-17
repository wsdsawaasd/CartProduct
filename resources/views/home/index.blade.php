@extends('welcome')
@section('title','List product')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h2>Danh sach san pham</h2></div>
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>price</th>
                        <th>old_price</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($products))
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->old_price}}</td>
                                <td><a href="{{route('home.edit',$product->id)}}">
                                        <button class="btn btn-danger">update</button>
                                    </a>
                                    <a href="{{route('home.delete',$product->id)}}">
                                        <button class="btn btn-dark">delete</button>
                                    </a>
                                    <a href="{{route('home.show',$product->id)}}">
                                        <button class="btn btn-success">show</button>
                                    </a>
                                    <a href="{{route('cart.addItem',$product->id)}}">
                                        <button class="btn btn-info">Add to Cart</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <h1>??</h1>
                    @endif
                    </tbody>
                </table>
                <a href="{{route('home.create')}}">
                    <button type="submit" class="btn btn-primary">Create</button>
                </a>
                <a href="{{route('cart.view')}}">
                    <button type="submit" class="btn btn-warning offset-7">View Cart</button>
                </a>
            </div>
        </div>
    </div>
@endsection