<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                "title" => "Get in the lab",
                "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icon_id" => 1
            ],
            [
                "title" => "Projects online",
                "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icon_id" => 2
            ],
            [
                "title" => "SMART MARKETING",
                "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icon_id" => 3
            ],
            [
                "title" => "Get in the lab",
                "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icon_id" => 4
            ],
            [
                "title" => "Projects online",
                "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icon_id" => 5
            ],
            [
                "title" => "SMART MARKETING",
                "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icon_id" => 6
            ],
        ]);
    }
}
