<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::factory()->create([
            'tag'	=> 'Etudiant',
            'slug'=>'etudiant',
        ]);
        Tag::factory()->create([
            'tag'=>'Alumni',
            'slug'=>'alumni',
        ]);
        Tag::factory()
            ->count(random_int(1, 10))
            ->create();
    }
}
