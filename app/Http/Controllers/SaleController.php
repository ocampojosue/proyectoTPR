<?php

namespace App\Http\Controllers;
use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function indexsale(){
        return view('sale.sale');
    }
    public function create(){
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
