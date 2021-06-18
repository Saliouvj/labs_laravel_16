<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                "name" => "Nom",
                "email" => "comment@comment.be",
                "comment" => "Exemple de commentaire validé",
                "dateDay" => date("d"),
                "dateMonth" => date("M"),
                "dateYear" => date("Y"),
                "post_id" => 1,
                "validate" => 1,
            ],
            [
                "name" => "Michel",
                "email" => "hello@comment.be",
                "comment" => "Exemple de commentaire pas validé à la base",
                "dateDay" => date("d"),
                "dateMonth" => date("M"),
                "dateYear" => date("Y"),
                "post_id" => 1,
                "validate" => 0,
            ]
        ]);
    }
}
