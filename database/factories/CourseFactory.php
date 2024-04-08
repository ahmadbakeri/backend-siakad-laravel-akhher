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
            'image'=>'https://hatrabbits.com/wp-content/uploads/2017/01/random.jpg',
            'time'=>$this->faker->randomElement(['1', '2', '3']),
        ];
    }
}
