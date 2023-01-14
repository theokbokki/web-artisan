<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostUserRelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();

        // Populate the pivot table
        User::all()->each(function ($user) use ($posts) {
            $user->posts()->attach(
                $posts->random(rand(2, 5))->pluck('id')->toArray()
            );
        });
    }
}
