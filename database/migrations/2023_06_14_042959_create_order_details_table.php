<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('OrderID');
            $table->unsignedBigInteger('ProductID');
            $table->decimal('UnitPrice', 8, 2);
            $table->integer('Quantity');
            $table->decimal('Discount', 8, 2)->default(0);
            $table->timestamps();

            $table->foreign('ProductID')->references('ProductID')->on('products');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_details');
    }
};
