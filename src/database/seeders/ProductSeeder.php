<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::firstOrCreate([
            'client_id' => 1,
            'image' => '',
            'price' => '5',
            'name' => 'sepatu',
            'description' => '',
        ]);
    }
}
