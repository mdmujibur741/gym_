<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female','other']);
        $package = $this->faker->randomElement(['yearly', 'monthly','lifetime']);
        return [
              'name' => $this->faker->name($gender),
              'email' => $this->faker->email,
              'phone' => $this->faker->tollFreePhoneNumber,
              'age' => $this->faker->numberBetween(10,30),
              'gender' => $gender,
              'package_id' => $this->faker->numberBetween(1,3),
              'dob' => $this->faker->date(),
              'branch_id' => 1,
              'user_id' => 1,

        ];
    }
}
