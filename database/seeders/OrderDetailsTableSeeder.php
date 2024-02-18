<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;
use DB;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = Order::where('order_id', 'your_generated_uuid')->first();
        $product = Product::where('name', 'Product1')->first();

        DB::table('order_details')->insert([
            [
                'order_id' => $order->id,
                'product_id' => $product->id,
                'product_price' => $product->price,
                'qty' => 2,
                'sub_total' => $product->price * 2,
            ],
            // Add more order detail data as needed

            ]);
    }
}
