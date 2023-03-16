<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id', 100);
            $table->string('state', 50);
            $table->string('payment_mode', 100);
            $table->string('soft_descriptor', 255);
            $table->text('description', 255);
            $table->string('currency', 20);
            $table->decimal('total', 8, 2);
            $table->decimal('subtotal', 8, 2);
            $table->decimal('iva', 8, 2);
            $table->decimal('discount', 8, 2);
            $table->decimal('shipping_price', 8, 2);
            $table->decimal('shipping_discount', 8, 2);
            $table->string('shipping_key', 150)->nullable();
            $table->string('shipping_company')->nullable();
            $table->integer('shipping_status')-> nullable();
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
