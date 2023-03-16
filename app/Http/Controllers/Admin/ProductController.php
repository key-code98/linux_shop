<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(5);
        
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create array options to select form input
        $categories = Category::orderBy('id', 'desc')->pluck('name', 'id');

        return view('admin.product.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        /*
            Se agregan los archivos a la ruta /storage,
            para poder acceder a éstos desde la carpeta /public
            se debe ejecutar el comando: php artisan storage:link
         */


        $image = $request->file('img')->store('public/products');

        if ($request->file('img2')) {

            $image2 = $request->file('img2')->store('public/products');
        }

        if ($request->file('img3')) {

            $image3 = $request->file('img3')->store('public/products');
        }

        if ($request->file('img4')) {

            $image4 = $request->file('img4')->store('public/products');
        }

        if ($request->file('img4')) {

            $image5 = $request->file('img5')->store('public/products');
        }


        //url to save in db
        $url  = Storage::url($image);
        $url2  = (isset($image2)) ? Storage::url($image2) : null;
        $url3  = (isset($image3)) ? Storage::url($image3) : null;
        $url4  = (isset($image4)) ? Storage::url($image4) : null;
        $url5  = (isset($image5)) ? Storage::url($image5) : null;

        $visible = ($request->get('visible')) ? 1 : 0;

        
        $validatedData = $request->validate([
            'name' => 'required|unique:products|min:3|max:255',
            'category' => 'required',
            'extract' => 'required|min:10|max:255',
            'description' => 'required|min:10|max:255',
            'price' => 'required|min:1|max:6',
            'quantity' => 'required|min:1|max:6',
            'img'  => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
            'img2' => 'image|mimes:jpg,jpeg,png,svg|max:2048',
            'img3' => 'image|mimes:jpg,jpeg,png,svg|max:2048',
            'img4' => 'image|mimes:jpg,jpeg,png,svg|max:2048',
            'img5' => 'image|mimes:jpg,jpeg,png,svg|max:2048'
        ]);


        $product = Product::create([
            
            'name' => $request->get('name'),
            'slug' => Str::snake(strtolower($request->get('name'))),
            'category_id' => $request->get('category'),
            'extract' => $request->get('extract'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'quantity' => number_format($request->get('quantity'), 2),
            'image' => $url,
            'image2' => $url2,
            'image3' => $url3,
            'image4' => $url4,
            'image5' => $url5,
            'visible' => $visible
        ]);

        $message = ($product) ? 'Add to product succesfull' : 'Can´t add product, error exists :(';


        return redirect()->route('product.index')->with('message', $message);

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
    public function edit(Product $product)
    {

        $categories = Category::orderBy('id', 'desc')->pluck('name', 'id');

        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

       /*
            Se agregan los archivos a la ruta /storage,
            para poder acceder a éstos desde la carpeta /public
            se debe ejecutar el comando: php artisan storage:link
         */
        $image  = $request->file('img')->store('public/products');
        $image2 = $request->file('img2')->store('public/products');
        $image3 = $request->file('img3')->store('public/products');
        $image4 = $request->file('img4')->store('public/products');
        $image5 = $request->file('img5')->store('public/products');

        // Save the image and save the url
        $url  = Storage::url($image);
        $url2 = Storage::url($image2);
        $url3 = Storage::url($image3);
        $url4 = Storage::url($image4);
        $url5 = Storage::url($image5);

        $visible = ($request->get('visible')) ? 1 : 0;

        //Update the product
        $product->fill($request->all());
        $product->slug = Str::snake($request->get('name'));
        $product->visible = $visible;
        $product->image  = $url;
        $product->image2 = $url2;
        $product->image3 = $url3;
        $product->image4 = $url4;
        $product->image5 = $url5;

        $updated = $product->save();


        //Replace public url to storage url
        $url  = str_replace('storage', 'public', $request->get('image'));
        $url2 = str_replace('storage', 'public', $request->get('image2'));
        $url3 = str_replace('storage', 'public', $request->get('image3'));
        $url4 = str_replace('storage', 'public', $request->get('image4'));
        $url5 = str_replace('storage', 'public', $request->get('image5'));

        //Delete the image
        Storage::delete($url);
        Storage::delete($url2);
        Storage::delete($url3);
        Storage::delete($url4);
        Storage::delete($url5);

        $message = ($updated) ? 'Update product succesfull' : 'Error exists at update product';

        return redirect()->route('product.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {

        $deleted = $product->delete();

        //Replace public url to storage url
        $url = str_replace('storage', 'public', $request->get('image'));
        //Delete the image
        Storage::delete($url);

        $message = ($deleted) ? 'Delete the product succesfull' : 'Error exists at delete product';

        return redirect()->route('product.index')->with('message', $message);

    }
}
