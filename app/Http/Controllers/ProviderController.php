<?php

namespace App\Http\Controllers;
use App\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $providers=Provider::paginate(5);
        return view('provider.index',compact('providers')); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('provider.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|alpha',
            'surname'=>'required|alpha',
            'phone'=>'required|numeric',
            'city'=>'required|alpha',
            'direction'=>'required|alpha',
            'ci'=>'required|numeric',
            'company_name'=>'required|alpha',
        ]);

        $provider = new Provider();
        $provider->name = $request->name;
        $provider->surname = $request->surname;
        $provider->phone = $request->phone;
        $provider->city = $request->city;
        $provider->direction = $request->direction;
        $provider->ci = $request->ci;
        $provider->company_name = $request->company_name;
        $provider->user_id = $request->user_id;
        $provider->user_name = $request->user_name;
        $provider->save();  
        return redirect('provider'); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_provider){
        $provider= Provider::findOrFail($id_provider);
        return view('provider.edit',compact('provider'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_provider){
        $validatedData = $request->validate([
            'name'=>'required|alpha',
            'surname'=>'required|alpha',
            'phone'=>'required|numeric',
            'city'=>'required|alpha',
            'direction'=>'required|alpha',
            'ci'=>'required|numeric',
            'company_name'=>'required|alpha',
        ]);
        Provider::whereid_provider($id_provider)->update($validatedData); 
        
        $provider= Provider::findOrFail($id_provider);
        return view('provider.edit',compact('provider'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_provider){
        Provider::destroy($id_provider);
        return redirect('provider');
    }
}
