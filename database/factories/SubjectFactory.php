<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Course;
use App\Models\Toplist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id'=>Course::factory(),
            'lecturer_id' => User::factory(),
            'toplist_id' => Toplist::factory(),
            'title'=>$this->faker->sentence(1),
            'subtitle'=>$this->faker->sentence(3),
            // 'semester' => 'Ganjil',
            // 'academic_year' => '2023/2024',
            // 'credit' => 3,
            // 'code' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
            'time'=>$this->faker->randomElement(['0', '1', '2', '3']),
            'field'=>$this->faker->sentence(1),
            'image'=>$this->faker->randomElement(['A1', 'A2', 'A3', 'A4', 'A5', 'A6']),
            'description' => $this->faker->text(100),
        ];
    }
}
