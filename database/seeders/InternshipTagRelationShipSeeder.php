<?php

namespace Database\Seeders;

use App\Models\Internship;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class InternshipTagRelationShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all the roles attaching up to 3 random roles to each user
        $tags = Tag::all();

        // Populate the pivot table
        Internship::all()->each(function ($internship) use ($tags) {
            $internship->tags()->attach(
                $tags->random(rand(0, 3))->pluck('id')->toArray()
            );
        });
    }
}
