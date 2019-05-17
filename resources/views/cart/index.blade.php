@extends('welcome')
@section('title','View Cart')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h2>view Cart</h2></div>
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>old_price</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(Session::has('cart'))
                        @foreach($cart->items as $product)
                            <tr>
                                <td>{{$product['item']->id}}</td>
                                <td>{{$product['item']->name}}</td>
                                <td>{{$product['item']->price}}</td>
                                <td>{{$product['item']->old_price}}</td>
                                <td>
                                    <button class="btn btn-danger">App to</button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <button class="btn btn-warning" onclick="window.history.go(-1);return false">Return</button>
            </div>
        </div>
    </div>
@endsection
