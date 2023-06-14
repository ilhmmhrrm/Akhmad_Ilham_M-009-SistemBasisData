<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('CustomerID');
            $table->string('CompanyName');
            $table->string('ContactName')->nullable();
            $table->string('ContactTitle')->nullable();
            $table->string('Address')->nullable();
            $table->string('City')->nullable();
            $table->string('Region')->nullable();
            $table->string('PostalCode')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
