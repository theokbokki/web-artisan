<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Internship;
use Illuminate\Database\Seeder;

class InternshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::all()->each(static function ($company) {
            Internship::factory()
            ->count(random_int(0, 4))
            ->for($company)
            ->create();
        });
    }
}
