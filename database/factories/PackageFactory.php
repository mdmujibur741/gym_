<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
          $name = $this->faker->unique()->randomElement(['monthly','yearly','daily','holiday']);
        return [
              'name' => $name,
              'price' => $this->faker->numberBetween(100,5000),
        ];
    }
}
