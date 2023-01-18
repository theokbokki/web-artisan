<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['name'=>'Theo Leonet', 'username'=>'theoleonet', 'email'=>'theo.leonet@student.hepl.be', 'excerpt'=>'{}', 'job'=>'{}']);
        User::factory()->create(['name'=>'Alyssa Delfleur', 'username'=>'alyssadelfleur', 'email'=>'alyssa.delfleur@example.com', 'excerpt'=>'{}', 'job'=>'{}']);
        // User::factory()->count(21)->create();
    }
}
