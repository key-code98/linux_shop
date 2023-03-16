<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$product = new Product();

        	$product->name = 'T-shirt 1';
        	$product->slug = 't-shirt_1';
        	$product->description = 'long description from the t-shirt 1';
        	$product->extract = 'extract desc the t-shirt 1';
            $product->quantity = '10';
        	$product->price = '550.00';
        	$product->image = 'img/prod_1.svg';
        	$product->visible = 1;
        	$product->category_id = 3;

        	$product->save();


        	$product = new Product();

        	$product->name = 'T-shirt 2';
        	$product->slug = 't-shirt_2';
        	$product->description = 'long description from the t-shirt 2';
        	$product->extract = 'extract desc the t-shirt 2';
            $product->quantity = '15';
        	$product->price = '120.00';
        	$product->image = 'img/prod_2.svg';
        	$product->visible = 1;
        	$product->category_id = 3;

        	$product->save();


        	$product = new Product();

        	$product->name = 'T-shirt 3';
        	$product->slug = 't-shirt_3';
        	$product->description = 'long description from the t-shirt 3';
        	$product->extract = 'extract desc the t-shirt 3';
            $product->quantity = '17';
        	$product->price = '99.99';
        	$product->image = 'img/prod_3.svg';
        	$product->visible = 1;
        	$product->category_id = 3;

        	$product->save();


        	$product = new Product();

        	$product->name = 'T-shirt 4';
        	$product->slug = 't-shirt_4';
        	$product->description = 'long description from the t-shirt 3';
        	$product->extract = 'extract desc the t-shirt 4';
            $product->quantity = '23';
        	$product->price = '99.99';
        	$product->image = 'img/prod_4.svg';
        	$product->visible = 1;
        	$product->category_id = 3;

        	$product->save();


        	$product = new Product();

        	$product->name = 'T-shirt 5';
        	$product->slug = 't-shirt_5';
        	$product->description = 'long description from the t-shirt 5';
        	$product->extract = 'extract desc the t-shirt 5';
            $product->quantity = '31';
        	$product->price = '599.49';
        	$product->image = 'img/prod_5.svg';
        	$product->visible = 1;
        	$product->category_id = 3;

        	$product->save();


        	$product = new Product();

        	$product->name = 'Shirt 1';
        	$product->slug = 'shirt_1';
        	$product->description = 'long description from the shirt 1';
        	$product->extract = 'extract desc the shirt 1';
            $product->quantity = '10';
        	$product->price = '500.49';
        	$product->image = 'img/prod_6.svg';
        	$product->visible = 1;
        	$product->category_id = 1;

			
			$product->save();        	


        	$product = new Product();

        	$product->name = 'Shirt 2';
        	$product->slug = 'shirt_2';
        	$product->description = 'long description from the shirt 2';
        	$product->extract = 'extract desc the shirt 2';
            $product->quantity = '28';
        	$product->price = '1340.00';
        	$product->image = 'img/prod_7.svg';
        	$product->visible = 1;
        	$product->category_id = 1;

        	$product->save();


        	$product = new Product();

        	$product->name = 'Shirt 3';
        	$product->slug = 'shirt_3';
        	$product->description = 'long description from the shirt 3';
        	$product->extract = 'extract desc the shirt 3';
            $product->quantity = '7';
        	$product->price = '974.49';
        	$product->image = 'img/prod_8.svg';
        	$product->visible = 1;
        	$product->category_id = 1;

        	$product->save();


        	$product = new Product();

        	$product->name = 'Shirt 4';
        	$product->slug = 'shirt_4';
        	$product->description = 'long description from the shirt 4';
        	$product->extract = 'extract desc the shirt 4';
            $product->quantity = '35';
        	$product->price = '1050.00';
        	$product->image = 'img/prod_9.svg';
        	$product->visible = 1;
        	$product->category_id = 1;

        	$product->save();


        	$product = new Product();

        	$product->name = 'Shirt 5';
        	$product->slug = 'shirt_5';
        	$product->description = 'long description from the shirt 3';
        	$product->extract = 'extract desc the shirt 5';
            $product->quantity = '11';
        	$product->price = '974.49';
        	$product->image = 'img/prod_10.svg';
        	$product->visible = 1;
        	$product->category_id = 1;

        	$product->save();


        	$product = new Product();

        	$product->name = 'Jacket 1';
        	$product->slug = 'jacket_1';
        	$product->description = 'long description from the jacket 1';
        	$product->extract = 'extract desc the jacket 1';
            $product->quantity = '55';
        	$product->price = '2500.00';
        	$product->image = 'img/prod_11.svg';
        	$product->visible = 1;
        	$product->category_id = 2;

        	$product->save();


        	$product = new Product();

        	$product->name = 'Jacket 2';
        	$product->slug = 'jacket_2';
        	$product->description = 'long description from the jacket 2';
        	$product->extract = 'extract desc the jacket 2';
            $product->quantity = '108';
        	$product->price = '899.50';
        	$product->image = 'img/prod_12.svg';
        	$product->visible = 1;
        	$product->category_id = 2;

        	$product->save();


        	$product = new Product();

        	$product->name = 'Jacket 3';
        	$product->slug = 'jacket_3';
        	$product->description = 'long description from the jacket 3';
        	$product->extract = 'extract desc the jacket 3';
            $product->quantity = '98';
        	$product->price = '3150.00';
        	$product->image = 'img/prod_13.svg';
        	$product->visible = 1;
        	$product->category_id = 2;

        	$product->save();


        	$product = new Product();

        	$product->name = 'Jacket 4';
        	$product->slug = 'jacket_4';
        	$product->description = 'long description from the jacket 4';
        	$product->extract = 'extract desc the jacket 4';
            $product->quantity = '81';
        	$product->price = '684.99';
        	$product->image = 'img/prod_14.svg';
        	$product->visible = 1;
        	$product->category_id = 2;

        	$product->save();


        	$product = new Product();

        	$product->name = 'Jacket 5';
        	$product->slug = 'jacket_5';
        	$product->description = 'long description from the jacket 5';
        	$product->extract = 'extract desc the jacket 5';
            $product->quantity = '71';
        	$product->price = '3250.00';
        	$product->image = 'img/prod_15.svg';
        	$product->visible = 1;
        	$product->category_id = 2;

        	$product->save();


        	$product = new Product();

        	$product->name = 'Air nike 1';
        	$product->slug = 'airnike_1';
        	$product->description = 'long description from the air nike 1';
        	$product->extract = 'extract desc the air nike 1';
            $product->quantity = '5';
        	$product->price = '2950.00';
        	$product->image = 'img/prod_16.svg';
        	$product->visible = 1;
        	$product->category_id = 2;


        	$product->save();


        	$product = new Product();

        	$product->name = 'Air nike 2';
        	$product->slug = 'airnike_2';
        	$product->description = 'long description from the air nike 2';
        	$product->extract = 'extract desc the air nike 2';
            $product->quantity = '69';
        	$product->price = '1490.49';
        	$product->image = 'img/prod_17.svg';
        	$product->visible = 1;
        	$product->category_id = 2;


        	$product->save();


        	$product = new Product();

        	$product->name = 'Air nike 3';
        	$product->slug = 'airnike_3';
        	$product->description = 'long description from the air nike 3';
        	$product->extract = 'extract desc the air nike 3';
            $product->quantity = '13';
        	$product->price = '990.00';
        	$product->image = 'img/prod_18.svg';
        	$product->visible = 1;
        	$product->category_id = 2;


        	$product->save();


        	$product = new Product();

        	$product->name = 'Air nike 4';
        	$product->slug = 'airnike_4';
        	$product->description = 'long description from the air nike 4';
        	$product->extract = 'extract desc the air nike 4';
            $product->quantity = '30';
        	$product->price = '3500.00';
        	$product->image = 'img/prod_19.svg';
        	$product->visible = 1;
        	$product->category_id = 2;

        	$product->save();


        	$product = new Product();

        	$product->name = 'Air nike 5';
        	$product->slug = 'airnike_5';
        	$product->description = 'long description from the air nike 5';
        	$product->extract = 'extract desc the air nike 5';
            $product->quantity = '290';
        	$product->price = '799.00';
        	$product->image = 'img/prod_20.svg';
        	$product->visible = 1;
        	$product->category_id = 2;

        	$product->save();


    }
}
