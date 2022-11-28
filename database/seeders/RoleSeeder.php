<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()
        ->create(['role'=>'teacher']);

        Role::factory()
        ->create(['role'=>'alumni']);

        Role::factory()
        ->create(['role'=>'student']);

        Role::factory()
        ->create(['role'=>'admin']);

        Role::factory()
        ->create(['role'=>'guest']);
    }
}
