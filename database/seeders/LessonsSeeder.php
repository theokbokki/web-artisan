<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Year;
use Illuminate\Database\Seeder;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Year::all()->each(static function ($year) {
            Lesson::factory()
            ->count(random_int(5, 8))
            ->for($year)
            ->create();
        });
    }
}
