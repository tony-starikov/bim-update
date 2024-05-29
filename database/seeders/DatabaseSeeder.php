<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ServiceSeeder::class,
            PageSeeder::class,
            PostSeeder::class,
            PluginSeeder::class,
            FamilySeeder::class,
            AchievementSeeder::class,
            StarSeeder::class,
            TeammateSeeder::class,
            MenuItemSeeder::class,
            PageItemSeeder::class,
            TestimonialSeeder::class,
            WorkSeeder::class,
            ContactSeeder::class,
            MoonshineUserSeeder::class,
            ServiceBlockSeeder::class,
//            SeoSeeder::class,
        ]);
    }
}
