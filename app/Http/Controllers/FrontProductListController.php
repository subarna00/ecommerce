<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontProductListController extends Controller
{
    public $i;
    public $count;
    public function index(){
        $count = Product::get()->count();
        $products = Product::latest()->limit(9)->get();
        $randomActiveProducts = Product::inRandomOrder()->limit(6)->get();
        $randomActiveProductIds = [];
        foreach($randomActiveProducts as $product){
            array_push($randomActiveProductIds,$product->id);
        }
        $randomItemProducts = Product::where('id', '!=',$randomActiveProductIds)->limit(3)->get();
        return view('product',compact('products','randomActiveProducts','randomItemProducts'));
    }
    public function show($id){
        $product = Product::find($id);
        $productFromSameCategories = Product::inRandomOrder()->where('category_id','$product->category_id')->where('id','!=',$product->id)->limit(3)->get();
        return view('show',compact('product','productFromSameCategories'));
    }
}
