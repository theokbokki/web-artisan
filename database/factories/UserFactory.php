<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $username = strtolower(fake()->sentence(5));

        return [
            'name' => strtolower(fake()->name()),
            'username' => $username,
            'slug' => Str::slug($username),
            'avatar' => fake()->imageUrl(128, 128, true, 'people', $username),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'job'=>fake()->sentence(8),
            'excerpt' => fake()->sentence(15),
            'body' => '<p>'.implode('</p><p>', fake()->paragraphs(3)).'</p>',
            'password' => bcrypt('change_this'),
            'remember_token' => Str::random(10),
        ];
    }
}
