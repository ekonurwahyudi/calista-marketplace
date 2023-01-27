<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $admin = Product::create([
            'user_id' => '1',
            'lab_id' => '1',
            'name_product' => 'Handheld, Modular, and USB',
            'des_product' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'category_id' => 'Fiber Optic',
            'foto_cover' => 'dashboards/assets/media//stock/ecommerce/3.jpg',
            'foto_1' => ' ',
            'foto_2' => ' ',
            'foto_3' => ' ',
            'foto_4' => ' ',
            'foto_5' => ' ',
            'status_product' => 'publish',
            'price_before' => '1000000',
            'price_min' => '2.500.000',
            'price_max' => '4.000.000',
        ]);
    }
}