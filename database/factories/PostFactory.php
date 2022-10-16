<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique->numberBetween(0,11),
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true) ,
            'description'=>$this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'image' => $this->faker->imageUrl($width = 640, $height = 480)

        ];
    }
}
