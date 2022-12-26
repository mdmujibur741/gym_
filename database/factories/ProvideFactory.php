<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provide>
 */
class ProvideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title_1stLine' => $this->faker->text(10),
            'title' => $this->faker->text(20),
            'point_one' => $this->faker->text(15),
            'point_two' => $this->faker->text(15),
            'point_three' => $this->faker->text(15),
            'point_four' => $this->faker->text(15),

        ];
    }
}
