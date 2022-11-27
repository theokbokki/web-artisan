<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Seeder;

class YearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Year::factory()
        ->create(['year'=>1]);

        Year::factory()
        ->create(['year'=>2]);

        Year::factory()
        ->create(['year'=>3]);
    }
}
