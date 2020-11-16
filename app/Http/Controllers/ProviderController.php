<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index(){
        return view('provider.index');
    }
    public function create(){
    }
    public function store(Request $request){
        $provider = new Provider();
        $provider->name = $request->name;
        $provider->surname = $request->surname;
        $provider->phone = $request->phone;
        $provider->city = $request->city;
        $provider->direction = $request->direction;
        $provider->ci = $request->ci;
        $provider->company_name = $request->company_name;
        $provider->save();
    }
    public function destroy($id){
    }
    public function edit($id){
    }
    public function update(Request $request,$id){
    }
}
