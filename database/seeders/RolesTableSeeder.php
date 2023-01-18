<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Trail\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the roles seeder.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            // ...
        ]);
    }
}
