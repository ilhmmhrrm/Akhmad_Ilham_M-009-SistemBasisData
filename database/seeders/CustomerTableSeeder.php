<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerTableSeeder extends Seeder
{
    public function run()
    {
        Customer::factory()->count(5)->create();
    }
}

