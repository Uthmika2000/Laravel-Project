<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        \App\Models\User::factory(5)->create();

        // Customers Seeder
        $this->call(CustomersTableSeeder::class);
        \App\Models\Customer::factory(5)->create();

        // Products Seeder
        $this->call(ProductsTableSeeder::class);
        \App\Models\Product::factory(5)->create();

        // Orders Seeder
        $this->call(OrdersTableSeeder::class);
        \App\Models\Order::factory(5)->create();

        // OrderDetails Seeder
        $this->call(OrderDetailsTableSeeder::class);
        \App\Models\OrderDetail::factory(5)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
