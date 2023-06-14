<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shipper;

class ShipperTableSeeder extends Seeder
{
    public function run()
    {
        Shipper::factory()->count(2)->create();
    }
}

