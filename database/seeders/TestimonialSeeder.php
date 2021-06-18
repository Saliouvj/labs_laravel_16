<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                "firstname" => "saliou",
                "name" => "barry",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "job" => "Maçon",
                "image" => "avatar/02.jpg",
            ],
            [
                "firstname" => "malo",
                "name" => "Present Present",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "job" => "Web Developer",
                "image" => "avatar/01.jpg",
            ],
            [
                "firstname" => "Seb",
                "name" => "le fou",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "job" => "Pompier",
                "image" => "avatar/02.jpg",
            ],
            [
                "firstname" => "Ayhan",
                "name" => "coach",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "job" => "PDG",
                "image" => "avatar/01.jpg",
            ],
            [
                "firstname" => "Jamila",
                "name" => "la douée",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "job" => "Designer",
                "image" => "avatar/02.jpg",
            ],
            [
                "firstname" => "Dawid",
                "name" => "president",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "job" => "Journaliste",
                "image" => "avatar/01.jpg",
            ],
        ]);
    }
}
