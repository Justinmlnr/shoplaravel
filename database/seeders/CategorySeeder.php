<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table ("categories")->insert([
            [
                "name"=> "Floral",
                "slug"=> "floral",
                "description"=>"Fragrance floral Femmes",
                "created_at"=> now(),
                "updated_at" => now(),    
            ],
            [
                "name"=> "Signature",
                "slug"=> "signature",
                "description"=>"Fragrance signature mixte",
                "created_at"=> now(),
                "updated_at" => now(),
            ],
            [
                "name"=> "Les boisés",
                "slug"=> "boises",
                "description"=>"Fragrance boisés mixte",
                "created_at"=> now(),
                "updated_at" => now(),
            ],
            [
                "name"=> "Vanilla",
                "slug"=> "vanilla",
                "description"=>"Fragrance vanillé mixte",
                "created_at"=> now(),
                "updated_at" => now(),
            ],
               
            [
                "name"=> "OUD",
                "slug"=> "oud",
                "description"=>"Fragrance OUD mixte",
                "created_at"=> now(),
                "updated_at" => now(),
            ],
            
        ]);
    }
}