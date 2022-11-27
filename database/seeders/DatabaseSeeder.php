<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call(UsersSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(WorksSeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(AnswersSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(InternshipsSeeder::class);
        $this->call(YearsSeeder::class);
        $this->call(LessonsSeeder::class);
        $this->call(VotesSeeder::class);
        $this->call(QuartersSeeder::class);
        $this->call(TeachingsSeeder::class);
        $this->call(PostUserRelationshipSeeder::class);
        $this->call(LessonUserRelationShipSeeder::class);
        $this->call(InternshipTagRelationShipSeeder::class);
        $this->call(LessonQuarterRelationShipSeeder::class);
        $this->call(PostTagRelationShipSeeder::class);
        $this->call(QuestionTagRelationShipSeeder::class);
    }
}
