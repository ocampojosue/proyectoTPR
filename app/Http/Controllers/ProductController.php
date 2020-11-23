<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Provider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $products=Product::paginate(5);
        return view('product.index',compact('products')); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $categories = Category::all();
        $providers = Provider::all();
        return view('product.create', compact('categories', 'providers'));

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
            'description'=>'required|alpha',
            'quantity'=>'required|numeric',
            'price'=>'required|numeric',
            'photo'=>'required',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->photo = $request->photo;
        $product->category_id = $request->category_id;
        $product->user_id = $request->user_id;
        $product->user_name = $request->user_name;
        $product->provider_id = $request->provider_id;
        $product->save();  
        return redirect('product'); 
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
    public function edit($id_product){
        $categories = Category::all();
        $providers = Provider::all();
        $product= Product::findOrFail($id_product);
        return view('product.edit',compact('product','categories','providers'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_product){
        $validatedData = $request->validate([
            /* 'category_name' => 'required|max:20' */
            'name'=>'required|alpha',
            'description'=>'required|alpha',
            'quantity'=>'required|numeric',
            'price'=>'required|numeric',
            'photo'=>'required',
        ]);
        Product::whereid_product($id_product)->update($validatedData);
        $categories = Category::all();
        $providers = Provider::all();
        $product= Product::findOrFail($id_product);
        return view('product.edit',compact('product','categories','providers'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_product){
        Product::destroy($id_product);
        return redirect('product');
    }
}
