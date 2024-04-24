<?php 
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory{
    //création de la table tag des colonne
    public function definition(): array{
        return [
            'tag_name' => $this->faker->word
        ] ;
}
}
