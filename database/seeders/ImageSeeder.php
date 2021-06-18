<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                "name" => "01.jpg",
                "active" => 1,
            ],
            [
                "name" => "02.jpg",
                "active" => 0,
            ]
        ]);
    }
}
