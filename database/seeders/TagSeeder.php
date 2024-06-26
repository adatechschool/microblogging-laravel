<?php

namespace Database\Seeders;

use Database\Factories\TagFactory;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Tag::factory()->count(4)->create();
    }

}

