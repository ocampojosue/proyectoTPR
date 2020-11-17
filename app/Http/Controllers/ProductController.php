<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Provider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function indexprod(){
        return view('product.product');

    }
    public function create(){
        $categories = Category::all();
        $providers = Provider::all();
        return view('product.create', compact('categories', 'providers'));

    }
    public function store(Request $request){
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        
    }
    public function destroy($id){
    }
    public function edit($id){
    }
    public function update(Request $request,$id){
    }
}
