<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubjectAttendance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectAttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubjectAttendance::factory(150)->create();
    }
}
