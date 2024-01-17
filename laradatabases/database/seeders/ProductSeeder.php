<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Product::create([
        //     'name' => 'Product 1',
        //     'short_description' => 'This is product',
        //     'description' => 'This is product number one',
        //     'price' => 9.99,
        // ]);

        // Product::create([
        //     'name' => 'Product 2',
        //     'short_description' => 'This is another product',
        //     'description' => 'This is a description for product two',
        //     'price' => 49.99,
        // ]);

        // Product::create([
        //     'name' => 'Product 3',
        //     'short_description' => 'This is product',
        //     'description' => 'This is a description for product three',
        //     'price' => 25.50
        // ]);

        Product::factory()->count(100)->create();
    }
}
