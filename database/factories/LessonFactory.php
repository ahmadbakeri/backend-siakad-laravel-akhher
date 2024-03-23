<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_id'=>Subject::factory(),
            'title'=>$this->faker->sentence(3),
            'subtitle'=>$this->faker->sentence(5),
            'minutes'=>$this->faker->randomElement(['0', '1', '2', '3']),
            'seconds'=>$this->faker->randomElement(['0', '1', '2', '3']),
            'description'=>$this->faker->paragraph(3),
            'youtube_link'=>$this->faker->randomElement(['A1', 'A2', 'A3', 'A4', 'A5', 'A6']),
        ];
    }
}
