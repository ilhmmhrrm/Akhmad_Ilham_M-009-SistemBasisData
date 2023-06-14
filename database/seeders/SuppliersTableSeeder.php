<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SuppliersTableSeeder extends Seeder
{
    public function run()
    {
        Supplier::factory()->count(5)->create();
    }
}

