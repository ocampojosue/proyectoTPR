<?php

namespace App\Http\Controllers;
use App\Sale;
use App\Category;
use App\Provider;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $sales=Sale::paginate(5);
        $categories = Category::all();
        $providers = Provider::all();
        return view('sale.index',compact('sales','categories', 'providers')); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $categories = Category::all();
        $providers = Provider::all();
        return view('sale.create' ,compact('categories', 'providers'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request, [
            'category_name'=>'required|alpha',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();  
        return redirect('category'); 
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
    public function edit($id_category){
        $category= Category::findOrFail($id_category);
        return view('category.edit',compact('category'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_category){
        $validatedData = $request->validate([
            'category_name' => 'required|max:20'
        ]);
        Category::whereid_category($id_category)->update($validatedData);

        $category= Category::findOrFail($id_category);
        return view('category.index',compact('category'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_category){
        Category::destroy($id_category);
        return redirect('category');
    }
}
