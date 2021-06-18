<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                "year" => date("Y"),
                "copyright" => "All rights reserved.",
                "designby" => "Design by",
                "person" => "Saliou"
            ]
        ]);
    }
}
