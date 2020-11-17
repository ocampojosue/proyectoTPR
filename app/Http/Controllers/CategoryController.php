<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Category;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function indexcat(){
        return view('category.category');
    }
    public function create(){
        return view('category.create');
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
