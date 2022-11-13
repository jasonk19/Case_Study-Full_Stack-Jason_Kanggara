<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            "category_name" => "Shoe",
            "category_slug" => "shoe",
            "asset_id" => 1
        ]);

        Category::create([
            "category_name" => "Food",
            "category_slug" => "food",
            "asset_id" => 2
        ]);

        Category::create([
            "category_name" => "Accessory",
            "category_slug" => "accessory",
            "asset_id" => 4
        ]);
    }
}
