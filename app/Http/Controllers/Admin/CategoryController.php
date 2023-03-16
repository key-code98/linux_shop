<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        //dd($categories);
        
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();

        
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'required|max:255',
            'color' => 'required',
        ]);
        


        $category = Category::create([
            'name' => $request->get('name'),
            'slug' => Str::snake(strtolower($request->get('name'))),
            'description' => $request->get('description'),
            'color' => $request->get('color')
        ]);

        $message = ($category) ? 'Add to category succesfull' : 'Can´t add category, error exists :(';


        return redirect()->route('category.index')->with('message', $message);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     *
     * 
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->fill($request->all());
        $category->slug = Str::snake($request->get('name'));

        $updated = $category->save();

        $message = ($updated) ? 'Update category succesfull' : 'Error exists at update category';

        return redirect()->route('category.index')->with('message', $message);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        
        $deleted = $category->delete();

        $message = ($deleted) ? 'Category deleted succesfull' : 'Error exists at delete category';

        return redirect()->route('category.index')->with('message', $message);
        
        
    }
}
