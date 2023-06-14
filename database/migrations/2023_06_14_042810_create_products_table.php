<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('ProductID');
            $table->string('ProductName');
            $table->unsignedBigInteger('SupplierID');
            $table->unsignedBigInteger('CategoryID');
            $table->string('QuantityPerUnit')->nullable();
            $table->decimal('UnitPrice', 8, 2);
            $table->integer('UnitsInStock')->default(0);
            $table->integer('UnitsOnOrder')->default(0);
            $table->integer('ReorderLevel')->nullable();
            $table->boolean('Discontinued')->default(false);
            $table->timestamps();

            $table->foreign('SupplierID')->references('SupplierID')->on('suppliers');
            $table->foreign('CategoryID')->references('CategoryID')->on('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
