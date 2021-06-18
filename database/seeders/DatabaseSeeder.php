<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            IconSeeder::class,
            VideoSeeder::class,
            BigTitleSeeder::class,
            ServiceSeeder::class,
            NewsletterSeeder::class,
            DiscoverSeeder::class,
            FooterSeeder::class,
            SubjectSeeder::class,
            FeatureSeeder::class,
            MapSeeder::class,
            ImageSeeder::class,
            LogoSeeder::class,
            TitleSeeder::class,
            ContactSeeder::class,
            GenreSeeder::class,
            JobSeeder::class,
            RoleSeeder::class,
            TestimonialSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            TagPostSeeder::class,
        ]);
    }
}
