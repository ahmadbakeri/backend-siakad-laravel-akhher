<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => Course::factory(),
            'student_id' => User::factory(),
            'score' => $this->faker->randomElement(['0', '1', '2', '3', '4']),
            'grade' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E']),
            'description' => $this->faker->randomElement(['Lulus', 'Tidak Lulus']),
            'academic_year' => $this->faker->randomElement(['2021/2022', '2022/2023', '2023/2024']),
            'semester' => $this->faker->randomElement(['Ganjil', 'Genap']),
            'created_by' => $this->faker->randomElement(['1', '2', '3']),
            'updated_by' => $this->faker->randomElement(['1', '2', '3']),
        ];
    }
}
