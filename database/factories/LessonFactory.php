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
            'time'=>$this->faker->randomElement(['0', '1', '2', '3']),
            'youtube_link'=>'D0UnqGm_miA',
            'gdrive_link'=>'https://drive.google.com/file/d/1RtfnfBXd5IMwusHgXN4XBkTeQ4bjSKJW/view?usp=sharing',
            'description'=>$this->faker->text(3000),
        ];
    }
}
