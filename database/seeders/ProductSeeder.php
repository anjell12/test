<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'TV',
            'price' => '3500000',
            'stock' => '40',
            'description' => '-',
        ]);
        Product::create([
            'name' => 'Lemari',
            'price' => '700000',
            'stock' => '7',
            'description' => '-',
        ]);
        Product::create([
            'name' => 'Sepatu',
            'price' => '750000',
            'stock' => '677',
            'description' => '-',
        ]);
        Product::create([
            'name' => 'Baju',
            'price' => '60000',
            'stock' => '788',
            'description' => '-',
        ]);
        Product::create([
            'name' => 'Mesin cuci',
            'price' => '1700000',
            'stock' => '90',
            'description' => '-',
        ]);
        Product::create([
            'name' => 'Pedang',
            'price' => '1200000',
            'stock' => '55',
            'description' => '-',
        ]);
        Product::create([
            'name' => 'Samurai',
            'price' => '7500000',
            'stock' => '66',
            'description' => '-',
        ]);
        Product::create([
            'name' => 'Tameng',
            'price' => '9000000',
            'stock' => '56',
            'description' => '-',
        ]);
        Product::create([
            'name' => 'Celana',
            'price' => '170000',
            'stock' => '44',
            'description' => '-',
        ]);
        Product::create([
            'name' => 'Tas',
            'price' => '1200000',
            'stock' => '72',
            'description' => '-',
        ]);
        Product::create([
            'name' => 'Karpet',
            'price' => '600000',
            'stock' => '12',
            'description' => '-',
        ]);
    }
}
