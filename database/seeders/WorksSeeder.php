<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Work;
use Illuminate\Database\Seeder;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(static function ($user) {
            Work::factory()
                ->count(random_int(0, 4))
                ->for($user)
                ->create();
        });
    }
}
