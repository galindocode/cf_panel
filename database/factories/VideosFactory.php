<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categorie_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->word,
            'slug' => $this->faker->slug,
            'type' => 'youtube', //$this->faker->string(6),
            'path' => 'https://youtu.be/mkggXE5e2yk', //$this->faker->url(),
            'description' => $this->faker->text,
        ];
    }
}
