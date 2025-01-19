<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();

        Customer::factory(100)->create();
        Product::factory(100)->create();

        User::factory()->create([
            'name' => 'root',
            'email' => 'root@gmail.com',
        ]);
    }
}
