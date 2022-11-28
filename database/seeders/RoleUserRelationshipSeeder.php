<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserRelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all the roles attaching up to 3 random roles to each user
        $roles = Role::all();

        // Populate the pivot table
        User::all()->each(function ($user) use ($roles) {
            $user->roles()->attach(
                $roles->random(rand(0, 2))->pluck('id')->toArray()
            );
        });
        //
    }
}
