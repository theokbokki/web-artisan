<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class QuestionTagRelationShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::all();

        // Populate the pivot table
        Question::all()->each(function ($question) use ($tags) {
            $question->tags()->attach(
                $tags->random(rand(0, 3))->pluck('id')->toArray()
            );
        });
    }
}
