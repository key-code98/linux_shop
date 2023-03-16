<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
                            'id', 
                            'transaction_id', 
                            'state', 
                            'payment_mode', 
                            'soft_descriptor', 
                            'description', 
                            'currency',
                            'total', 
                            'subtotal', 
                            'iva',
                            'discount',
                            'shipping_price', 
                            'shipping_discount', 
                            'shipping_key', 
                            'shipping_company',
                            'shipping_status', 
                            'user_id'
                        ];
}
