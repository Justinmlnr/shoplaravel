<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = DB::table('categories')->pluck('id', 'slug');

        DB::table('products')->insert([
            [
                'category_id' => $categories['floral'],
                'name' => 'Parfum Floral Elégance',
                'slug' => 'parfum-floral-elegance',
                'description' => 'Un parfum floral délicat et féminin.',
                'price' => 110.90,
                'stock' => 20,
                'image' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id'=> $categories['signature'],
                'name' => 'Parfum Signature Intense',
                'slug' => 'parfum-signature-intense',
                'description' => 'Une fragrance unique et affirmée.',
                'price' => 140.90,
                'stock' => 15,
                'image' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
                   
            ],
            [
                'category_id' => $categories['boises'],
                'name' => 'Parfum Boisé Authentique',
                'slug' => 'parfum-boise-authentique',
                'description' => 'Un parfum boisé profond et chaleureux.',
                'price' => 169.90,
                'stock' => 10,
                'image' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => $categories['vanilla'],
                'name' => 'Parfum Vanille Douce',
                'slug' => 'parfum-vanille-douce',
                'description' => 'Une fragrance vanillée douce et gourmande.',
                'price' => 200.90,
                'stock' => 25,
                'image' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => $categories['oud'],
                'name' => 'Parfum Oud satin',
                'slug' => 'parfum-oud-satin',
                'description' => 'Une fragrance oud intense et raffinée.',
                'price' => 300.90,
                'stock' => 8,
                'image' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}