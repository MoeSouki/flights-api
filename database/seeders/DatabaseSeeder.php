<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Junior Dev',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //     Porro asperiores veniam in odio quod accusamus quisquam eligendi dolore culpa maxime, 
        //     quidem minus! Excepturi, debitis. Explicabo officia culpa voluptas? Repellat, molestias.'
        // ]);
        // Listing::create([
        //     'title' => 'Laravel Senior Dev',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Google Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@gmail.com',
        //     'website' => 'https://www.google.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //     Porro asperiores veniam in odio quod accusamus quisquam eligendi dolore culpa maxime, 
        //     quidem minus! Excepturi, debitis. Explicabo officia culpa voluptas? Repellat, molestias.'
        // ]);

        Listing::factory(6)->create();

    }
}