<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(static function ($user) {
            Question::all()->each(static function ($question) use ($user) {
                Answer::factory()
                ->count(random_int(0, 1))
                ->for($question)
                ->for($user)
                ->create();
            });
        });
    }
}
