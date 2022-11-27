<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Seeder;

class VotesSeeder extends Seeder
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
                Vote::factory()
                ->count(random_int(0, 1))
                ->for($question)
                ->for($user)
                ->create();
            });
        });

        User::all()->each(static function ($user) {
            Answer::all()->each(static function ($answer) use ($user) {
                Vote::factory()
                ->count(random_int(0, 1))
                ->for($answer)
                ->for($user)
                ->create();
            });
        });
    }
}
