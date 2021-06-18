<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "firstname" => "admin",
                "name" => "Admin",
                "age" => 25,
                "photo" => "team/2.jpg",
                "description" => "je suis l'admin",
                "email" => "admin@admin.com",
                "password" => Hash::make("admin@admin.com"),
                "role_id" => 1,
                "job_id" => 4,
                "genre_id" => 1,
                "testimonial_id" => null,
                "validate" => 1,
            ],
            [
                "firstname" => "webmaster",
                "name" => "Webmaster",
                "age" => 23,
                "photo" => "team/1.jpg",
                "description" => "je suis le webmaster",
                "email" => "webmaster@webmaster.com",
                "password" => Hash::make("webmaster@webmaster.com"),
                "role_id" => 2,
                "job_id" => 5,
                "genre_id" => 1,
                "testimonial_id" => null,
                "validate" => 1,
            ],
            [
                "firstname" => "writer",
                "name" => "Redacteur",
                "age" => 34,
                "photo" => "team/3.jpg",
                "description" => "je suis le redacteur",
                "email" => "redacteur@redacteur.com",
                "password" => Hash::make("redacteur@redacteur.com"),
                "role_id" => 3,
                "job_id" => 1,
                "genre_id" => 1,
                "testimonial_id" => null,
                "validate" => 1,
            ],
            [
                "firstname" => "member",
                "name" => "Member",
                "age" => 34,
                "photo" => "team/3.jpg",
                "description" => "Je suis un membre",
                "email" => "membre@membre.com",
                "password" => Hash::make("membre@membre.com"),
                "role_id" => 4,
                "job_id" => 4,
                "genre_id" => 1,
                "testimonial_id" => null,
                "validate" => 0,
            ]
        ]);
    }
}
