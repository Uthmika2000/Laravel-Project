<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Customer;
use DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = Customer::where('name', 'Customer1')->first();
        DB::table('orders')->insert([
            [
                'order_id' => 'your_generated_uuid',
                'customer_id' => $customer->id,
                'total' => 49.99,
                'status' => 'pending',
            ],
            // Add more order data as needed

            ]);
        }
}
