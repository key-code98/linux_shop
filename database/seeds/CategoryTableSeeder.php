<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$category = new Category();

    	$category->name = 'Clouthing formal';
    	$category->slug = 'formal';
    	$category->description = 'Style clouthing formal';
    	$category->color = 'black';

    	$category->save();


    	$category = new Category();

    	$category->name = 'Trendy';
    	$category->slug = 'Trendy';
    	$category->description = 'Style clouthing trendy';
    	$category->color = 'blue';

    	$category->save();

    	$category = new Category();

    	$category->name = 'Careless';
    	$category->slug = 'careless';
    	$category->description = 'Style clouthing careless';
    	$category->color = 'green';

    	$category->save();
    }
}
