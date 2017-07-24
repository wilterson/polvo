<?php

use App\Entities\Product;
use App\Entities\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Master Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
        ]);

        factory(Product::class)->create([
            'name' => 'Camisa Polo',
            'sku' => '#87677UY',
            'category' => 'roupas',
            'price' => 190,
            'description' => 'Camisa Polo CK',
            'image' => 'http://localhost:8000/images/products/884da5912bab62fcc5ff898f62a6af90.jpg',
        ]);

        factory(Product::class)->create([
            'name' => 'Calça Jeans',
            'sku' => '#998788OU',
            'category' => 'roupas',
            'price' => 250,
            'description' => 'Calça Jeans Desbotada',
            'image' => 'http://localhost:8000/images/products/726acae7e5e808b52a6722ed95158975.jpg'
        ]);

        factory(Product::class)->create([
            'name' => 'Tênis Cano Longo',
            'sku' => '#645368AE',
            'category' => 'calcados',
            'price' => 650,
            'description' => 'Tenis de cano longo',
            'image' => 'http://localhost:8000/images/products/69fa9b7e63f4711d7b5bccfcaa8a238d.jpg',
        ]);
    }
}
