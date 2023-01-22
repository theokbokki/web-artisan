<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = strtolower(fake()->word(1, true));

        return [
            'name' => strtolower(fake()->word()),
            'avatar' => 'storage/avatars/seed_user_avatar.svg',
            'about' => '<p>'.implode('</p><p>', fake()->paragraphs(12)).'</p>',
        ];
    }
}
