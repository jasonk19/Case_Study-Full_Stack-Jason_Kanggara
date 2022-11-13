<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Asset::truncate();
        $csvfile = fopen(base_path("database/data/assets.csv"), "r");

        while (($data = fgetcsv($csvfile, 2000, ",")) !== FALSE) {
            Asset::create([
                "name" => $data[0],
                "path" => $data[1],
                "size" => $data[2]
            ]);
        }

        fclose($csvfile);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
