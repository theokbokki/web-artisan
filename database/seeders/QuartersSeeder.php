<?php

namespace Database\Seeders;

use App\Models\Quarter;
use Illuminate\Database\Seeder;

class QuartersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quarter::factory()
        ->create(['quarter'=>1]);

        Quarter::factory()
        ->create(['quarter'=>2]);
    }
}
