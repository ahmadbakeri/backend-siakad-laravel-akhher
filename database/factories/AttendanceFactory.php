<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'schedule_id' => Schedule::factory(),
            'student_id' => User::factory(),
            'attendance_code' => $this->faker->randomElement(['A1', 'A2', 'A3', 'A4', 'A5', 'A6']),
            'academic_year' => $this->faker->randomElement(['2021/2022', '2022/2023', '2023/2024']),
            'semester' => $this->faker->randomElement(['Ganjil', 'Genap']),
            'meeting' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6']),
            'status' => $this->faker->randomElement(['Hadir', 'Tidak Hadir']),
            'description' => $this->faker->randomElement(['Sakit', 'Izin', 'Tanpa Keterangan']),
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'score' => $this->faker->randomElement(['80', '90', '85', '70', '75']),
            'created_by' => $this->faker->randomElement(['1', '2', '3']),
            'updated_by' => $this->faker->randomElement(['1', '2', '3']),
        ];
    }
}
