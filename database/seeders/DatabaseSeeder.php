<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //create user 'Annie Easley'
        \App\Models\User::factory()->create([
            'name' => 'Annie Easley',
            'email' => 'annie@test.org',
            'password' => bcrypt('1234'),
        ]);
        
        \App\Models\User::factory(10)->create();
        
        // Call other seeders
        $this->call([
            PostSeeder::class,
        ]);
    }
}
