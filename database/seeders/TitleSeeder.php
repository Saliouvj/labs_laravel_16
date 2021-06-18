<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            [
                "name" => "GET IN THE LAB AND DISCOVER THE WORLD",
            ],
            [
                "name" => "WHAT OUR CLIENTS SAY",
            ],
            [
                "name" => "GET IN THE LAB AND SEE THE SERVICES",
            ],
            [
                "name" => "GET IN THE LAB AND MEET THE TEAM",
            ],
            [
                "name" => "GET IN THE LAB AND DISCOVER THE WORLD",
            ],
        ]);
    }
}
