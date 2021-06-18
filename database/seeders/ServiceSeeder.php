<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            // 9 PREMIERS
            [
                "icon_id" => 1,
                "title" => "Get in the lab",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 2,
                "title" => "Projects online",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 3,
                "title" => "SMART MARKETING",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 4,
                "title" => "Social Media",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 5,
                "title" => "Brainstorming",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 6,
                "title" => "Documented",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 7,
                "title" => "Responsive",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 8,
                "title" => "Retina ready",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 9,
                "title" => "Ultra modern",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            // FIN DES 9 PREMIERS

            // 9 SUIVANTS
            [
                "icon_id" => 1,
                "title" => "service X",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 2,
                "title" => "Service Y",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 3,
                "title" => "Service Z",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 4,
                "title" => "Service A",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 5,
                "title" => "Service B",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 6,
                "title" => "Service P",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 7,
                "title" => "Service M",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 8,
                "title" => "Service L",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon_id" => 9,
                "title" => "Service K",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            // TOTAL 18
        ]);
    }
}
