<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductAsset;

class ProductAssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductAsset::create([
            "asset_id" => 1,
            "product_id" => 1
        ]);
        ProductAsset::create([
            "asset_id" => 6,
            "product_id" => 1
        ]);
        ProductAsset::create([
            "asset_id" => 2,
            "product_id" => 2
        ]);
        ProductAsset::create([
            "asset_id" => 3,
            "product_id" => 2
        ]);
        ProductAsset::create([
            "asset_id" => 4,
            "product_id" => 3
        ]);
        ProductAsset::create([
            "asset_id" => 5,
            "product_id" => 3
        ]);
        ProductAsset::create([
            "asset_id" => 7,
            "product_id" => 3
        ]);
    }
}
