<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Product1',
                'price' => 19.99,
            ],
            [
                'name' => 'Product2',
                'price' => 29.99,
            ],
            // Add more product data as needed

            ]);
        }
}
