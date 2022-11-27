<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Seeder;

class LessonUserRelationShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all the roles attaching up to 3 random roles to each user
        $users = User::all();

        // Populate the pivot table
        Lesson::all()->each(function ($lesson) use ($users) {
            $lesson->users()->attach(
                $users->random(rand(0, 3))->pluck('id')->toArray()
            );
        });
    }
}
