<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $this->validate($request,[
            'name'=> 'required',
            'description'=>'required|min:3',
            'image'=>'required|mimes:jpeg,png',
            'flip_image'=>'required|mimes:jpeg,png',
            'price'=>'required|numeric',
            'additional_info'=>'required',
            'category'=>'required'
        ]);
        $image = $request->file('image')->store('public/product');
        $flip_image = $request->file('flip_image')->store('public/product');
        Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$image,
            'flip_image'=>$flip_image,
            'price'=>$request->price,
            'additional_info'=>$request->additional_info,
            'category_id'=>$request->category
        ]);
        notify()->success('Product created successfully !');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $image = $product->image;
        $flip_image = $product->flip_image;
        if($request->file('image') || $request->file('flip_image')){
            \Storage::delete($image);
            \Storage::delete($flip_image);
            $image = $request->file('image')->store('public/product');
            $flip_image = $request->file('flip_image')->store('public/product');
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->additional_info = $request->additional_info;
            $product->category_id = $request->category;
            $product->image = $image;
            $product->flip_image = $flip_image;
            $product->save();
        }else{
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->additional_info = $request->additional_info;
            $product->category_id = $request->category;
            $product->image = $image;
            $product->flip_image = $flip_image;
            $product->save();
        }
        notify()->success('Product updated successfully!'); 
        return redirect()->route('products.index');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $filename = $product->image;
        $product->delete();
        \Storage::delete($filename);
        notify()->success('Product deleted !');
        return redirect()->route('products.index');
    }
    public function loadSubCategories(Request $request, $id){
        $subcategory = Subcategory::where('category_id',$id)->pluck('name','id');
        return response()->json($subcategory);
    }
}
