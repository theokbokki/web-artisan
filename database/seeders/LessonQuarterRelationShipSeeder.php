<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Quarter;
use Illuminate\Database\Seeder;

class LessonQuarterRelationShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all the roles attaching up to 3 random roles to each user
        $quarters = Quarter::all();

        // Populate the pivot table
        Lesson::all()->each(function ($lesson) use ($quarters) {
            $lesson->quarters()->attach(
                $quarters->random(rand(1, 2))->pluck('id')->toArray()
            );
        });
        //
    }
}
