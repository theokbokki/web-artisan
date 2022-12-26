<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(static function ($user) {
            Question::factory()
                ->count(random_int(0, 1))
                ->for($user)
                ->create();
        });
    }
}
