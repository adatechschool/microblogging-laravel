<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Récupérer tous les IDs des postes et des tags
        $postIds = Post::pluck('id')->toArray();
        $tagIds = Tag::pluck('id')->toArray();

        // Nombre de relations à insérer
        $numberOfRelations = 10; // Modifier selon vos besoins

        // Insérer des relations aléatoires
        for ($i = 0; $i < $numberOfRelations; $i++) {
            // Sélectionner un ID de poste et de tag aléatoire
            $postId = $postIds[array_rand($postIds)];
            $tagId = $tagIds[array_rand($tagIds)];

            // Vérifier si la relation existe déjà
            if (!Post::find($postId)->tags()->where('tag_id', $tagId)->exists()) {
                // Insérer la relation
                Post::find($postId)->tags()->attach($tagId);
            }
        }
    }
}
