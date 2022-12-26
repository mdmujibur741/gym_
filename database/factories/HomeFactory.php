<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                    'title' => 'The healthy way of life company',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem vel autem odio laboriosam molestias, quae eveniet, ea maxime ab quod omnis provident recusandae asperiores praesentium sed mollitia pariatur nisi unde?',
                    
        ];
    }
}
