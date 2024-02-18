<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'customer_id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Customer1',
                'email' => 'customer1@example.com',
                'phone_number' => '1234567890',
            ],
            [
                'customer_id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Customer2',
                'email' => 'customer2@example.com',
                'phone_number' => '9876543210',
            ],
            // Add more customer data as needed
        ]);
    }
}
