<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Product::create([
            'name' => 'Product 1',
            'price' => 100,
            'stock' => 10,
        ]);
    
        \App\Models\Product::create([
            'name' => 'Product 2',
            'price' => 200,
            'stock' => 5,
        ]);
        \App\Models\Product::create([
            'name' => 'Product 3',
            'price' => 300,
            'stock' => 4
        ]);
        
    }
}
