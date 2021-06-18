<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            [
                "name" => "flaticon-023-flask",
            ],
            [
                "name" => "flaticon-011-compass",
            ],
            [
                "name" => "flaticon-037-idea",
            ],
            [
                "name" => "flaticon-039-vector",
            ],
            [
                "name" => "flaticon-036-brainstorming",
            ],
            [
                "name" => "flaticon-026-search",
            ],
            [
                "name" => "flaticon-018-laptop-1",
            ],
            [
                "name" => "flaticon-043-sketch",
            ],
            [
                "name" => "flaticon-012-cube",
            ],
        ]);
    }
}
