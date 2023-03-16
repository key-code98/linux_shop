<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'slug', 'description', 'extract', 'quantity', 'image', 'image2', 'image3', 'image4', 'image5', 'visible', 'price', 'category_id'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
