<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$user = new User();

    	$user->name = 'Christopher';
    	$user->last_name = 'Hernandez';
    	$user->email = 'parkurnx.yo@gmail.com';
    	$user->user = 'chernandez';
    	$user->password = \Hash::make('passtest');
    	$user->type = 'admin';
    	$user->active = 1;
    	$user->address = 'Río Ganges #45, Cuahutemoc CDMX';
    	$user->created_at = new DateTime();
    	$user->updated_at = new DateTime();

    	$user->save();


    	$user = new User();

    	$user->name = 'Maria';
    	$user->last_name = 'Rodriguez';
    	$user->email = 'maria@gmail.com';
    	$user->user = 'mrodriguez';
    	$user->password = \Hash::make('passtest2');
    	$user->type = 'user';
    	$user->active = 1;
    	$user->address = 'Av. San Antontio Abad, Tlalpan CDMX';
    	$user->created_at = new DateTime();
    	$user->updated_at = new DateTime();

    	$user->save();


    }
}
