<?php

namespace Database\Factories;

use App\Models\ArtPieceIdea;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtPieceIdeaFactory extends Factory
{
    protected $model = ArtPieceIdea::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'description' => $this->faker->text,
            'attachment' => $this->faker->randomElement([null, null, null, $this->faker->word.'jpg']),
        ];
    }
}
