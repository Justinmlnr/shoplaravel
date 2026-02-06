<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table ("order_items")->insert ([
            [
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 2,
                'unit_price' => 180.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1,
                'product_id' => 3,
                'quantity' => 1,
                'unit_price' => 270.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2,
                'product_id' => 2,
                'quantity' => 4,
                'unit_price' => 230.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2,
                'product_id' => 5,
                'quantity' => 1,
                'unit_price' => 200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}