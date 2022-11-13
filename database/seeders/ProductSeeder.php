<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECK=0;');
        // DB::statement('SET FOREIGN_KEY_CHECK=1;');

        Product::create([
            "product_name" => "Shoe",
            "product_slug" => "shoe-product",
            "price" => 30000,
            "description" => "A nice shoe with color variations"
        ]);

        Product::create([
            "product_name" => "Food",
            "product_slug" => "food",
            "price" => 50000,
            "description" => "A collection of delicious foods"
        ]);

        Product::create([
            "product_name" => "Accessories",
            "product_slug" => "accessories",
            "price" => 100000,
            "description" => "A collection of all kinds of wonderful and premium accessories"
        ]);
    }
}
