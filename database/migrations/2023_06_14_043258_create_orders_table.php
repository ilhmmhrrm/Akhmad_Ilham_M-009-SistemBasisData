<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('OrderID');
            $table->unsignedBigInteger('CustomerID');
            $table->unsignedBigInteger('EmployeeID');
            $table->date('OrderDate')->nullable();
            $table->date('RequiredDate')->nullable();
            $table->date('ShippedDate')->nullable();
            $table->unsignedBigInteger('ShipVia')->nullable();
            $table->decimal('Freight', 8, 2)->default(0);
            $table->string('ShipName')->nullable();
            $table->string('ShipAddress')->nullable();
            $table->string('ShipCity')->nullable();
            $table->string('ShipRegion')->nullable();
            $table->string('ShipPostalCode')->nullable();
            $table->string('ShipCountry')->nullable();
            $table->timestamps();

            $table->foreign('CustomerID')->references('CustomerID')->on('customers');
            $table->foreign('EmployeeID')->references('EmployeeID')->on('employees');
            $table->foreign('ShipVia')->references('ShipperID')->on('shippers');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
