<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tagposts')->insert([
            [
                "post_id" => 1, 
                "tag_id" => 1,
                "created_at" => now()
            ],
            [
                "post_id" => 1, 
                "tag_id" => 2,
                "created_at" => now()
            ],
            [
                "post_id" => 2, 
                "tag_id" => 2,
                "created_at" => now()
            ]
        ]);
    }
}
