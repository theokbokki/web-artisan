<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Comment;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
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
                Comment::factory()
                ->count(random_int(0, 2))
                ->for($question)
                ->for($user)
                ->create();
            });
        });

        User::all()->each(static function ($user) {
            Answer::all()->each(static function ($answer) use ($user) {
                Comment::factory()
                ->count(random_int(0, 2))
                ->for($answer)
                ->for($user)
                ->create();
            });
        });
    }
}
