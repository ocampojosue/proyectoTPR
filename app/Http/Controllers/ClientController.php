<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function indexcli(){
        return view('client.client');
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
