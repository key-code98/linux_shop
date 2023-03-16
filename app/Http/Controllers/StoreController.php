<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {

    	//return ('Correecto perfecto lo entiendo');

    	$products = Product::all();
    	//dd($products);

    		return view('store.index', compact('products'));
    }

    public function showProductDetail($id)
    {
        $products=Product::findOrFail($id);
        return view("store.details", compact('products'));
    }

    public function showProducts(){
    	$products = Product::orderBy('id', 'desc')->paginate(5);
    	return view('store.products', compact('products'));
    }

    public function login()
    {

        return view("store.login");

    }
}
