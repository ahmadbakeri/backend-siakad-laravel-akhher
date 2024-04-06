<?php

namespace Database\Seeders;

use App\Models\Toplist;
use Illuminate\Database\Seeder;

class ToplistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Toplist::factory(1)->create();
    }
}
