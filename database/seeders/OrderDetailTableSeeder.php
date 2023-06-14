<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderDetail;

class OrderDetailTableSeeder extends Seeder
{
    public function run()
    {
        OrderDetail::factory()->count(20)->create();
    }
}

