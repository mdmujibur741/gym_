<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reminder>
 */
class ReminderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
         $status = $this->faker->randomElement(['pending','accept','complete']);
        return [
            'user_id' => 1,
            'lead_id' => $this->faker->numberBetween(1,20),
            'reminder' => $this->faker->text(20),
            'reminder_date' => $this->faker->date(),
            'note' => $this->faker->text(35),
            'status' => $status,
        ];
    }
}
