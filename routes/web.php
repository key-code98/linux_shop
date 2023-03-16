<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ------------------------------------

//Linked folder storage
Route::get('storage-link', function(){

	if (file_exists(public_path('storage'))) {
		return 'The "public/storage" directory already exists';
	}

	app('files')->link(

		storage_path('app/public'), public_path('storage')
	);

	return 'The [public/storage] directory has been linked';
});



// Category dependence injection

// ------------------------------------
Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});


Route::bind('category', function($category){
	return App\Category::findOrFail($category);
});


Route::bind('user', function($user){
	return App\User::findOrFail($user);
});


Route::bind('order', function($order){
	return App\Order::findOrFail($order);
});
// ------------------------------------

Auth::routes();

Route::get('/', 'StoreController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/detail/{id}', 'StoreController@showProductDetail')->name('detail');

Route::get('products/', 'StoreController@showProducts')->name('show_products');

Route::get('cart/show', 'CartController@show')->name('cart_show');

Route::get('cart/add/{product}', 'CartController@add')->name('cart_add');

Route::get('cart/delete/{product}', 'CartController@delete')->name('cart_delete');

Route::get('cart/trash', 'CartController@trash')->name('cart_trash');

Route::get('cart/uptate/{product}/{quantity?}', 'CartController@update')->name('cart_update');

Route::get('order_detail', 'CartController@order')->name('order_detail')->middleware('auth');

Route::get('/paypal/pay', 'PaymentController@paymentPaypal')->name('payment');

Route::get('/paypal/status', 'PaymentController@paymentStatus')->name('payment_status');

// --------------------------

// ADMIN SHOP 

// --------------------------

Route::get('admin/home', function(){
	
	return view('admin.home');

})->middleware('admin');


Route::resource('admin/category', 'Admin\CategoryController')->middleware('admin');
Route::resource('admin/product', 'Admin\ProductController')->middleware('admin');
Route::resource('admin/order', 'Admin\OrderController')->middleware('admin');