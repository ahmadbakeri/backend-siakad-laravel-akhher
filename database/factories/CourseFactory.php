<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence(1),
            'subtitle'=>$this->faker->sentence(2),
            'class'=>$this->faker->randomElement(['X', 'XI', 'XII']),
            'image'=>$this->faker->randomElement(['A1', 'A2', 'A3', 'A4', 'A5', 'A6']),
            'time'=>$this->faker->randomElement(['1', '2', '3']),
        ];
    }
}
