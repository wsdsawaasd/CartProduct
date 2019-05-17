<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('home.index',compact('products'));
    }
    public function show($id){
        $product = Product::findorFail($id);
        return view('home.show',compact('product'));
    }
    public function create(){
        return view('home.create');
    }
    public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->price= $request->price;
        $product->old_price= $request->old_price;
        $product->save();
        return redirect()->route('home.index');
    }
    public function edit($id){
        $product=Product::findorFail($id);
        return view('home.edit',compact('product'));
    }
    public function update(Request $request,$id){
        $product = Product::findorFail($id);
        $product->name = $request->name;
        $product->price= $request->price;
        $product->old_price = $request->old_price;
        $product->save();
        return redirect()->route('home.index');
    }
    public function delete($id){
        $product = Product::findorFail($id);
        $product->delete();
        return redirect()->route('home.index');
    }
}
