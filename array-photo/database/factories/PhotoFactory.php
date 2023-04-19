<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => "Photo {$this->faker->word}",
            'description' => $this->faker->text($maxNbChars = 200),
            'image_url' => "https://picsum.photos/400/500",
        ];
    }
}
