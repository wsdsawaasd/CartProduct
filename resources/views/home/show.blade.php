@extends('welcome')
@section('title','Show Product')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">Danh sach Detail</div>
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>price</th>
                        <th>old_price</th>
                        <th>description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->old_price}}</td>
                        <td>{{$product->description}}</td>
                    </tr>
                    </tbody>
                </table>
                <a>
                    <button type="submit" class="btn btn-secondary" onclick="window.history.go(-1);return false">Back
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection