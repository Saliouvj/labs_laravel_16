<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BigTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bigtitles')->insert([
            [
                "title" => "Are you ready to stand out?",
                "phrase" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est."
            ]
        ]);
    }
}
