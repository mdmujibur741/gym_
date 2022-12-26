<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Footer>
 */
class FooterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address,
            'phone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->email,
            'facebook' => $this->faker->url,
            'twitter' => $this->faker->url,
            'instagram' => $this->faker->url,
            'youtube' => $this->faker->url,
            'linkedin' => $this->faker->url,
            'op_time' => $this->faker->time,
            'cl_time' => $this->faker->time,
        ];
    }
}
