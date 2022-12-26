<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Internship>
 */
class InternshipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = fake()->dateTimeBetween('-3 years', 'now')->setTimezone(timezone_open('Europe/Berlin'));
        $created_at = Carbon::parse($date, 'Europe/Berlin');
        $updated_at = random_int(1, 10) > 5 ? $created_at : $created_at->addWeeks(random_int(2, 8));
        $published_at = $created_at->addDays(random_int(0, 2) * random_int(2, 20));
        $title = fake()->sentence(10);

        return [
            'created_at' => $created_at,
            'updated_at' => $updated_at,
            'published_at' => $published_at,
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => fake()->sentence(40),
            'address' => fake()->address(),
            'position' => fake()->jobTitle(),
            'profile' => '<p>'.implode('</p><p>', fake()->paragraphs(5)).'</p>',
            'teachings' => '<p>'.implode('</p><p>', fake()->paragraphs(8)).'</p>',
            'work' => '<p>'.implode('</p><p>', fake()->paragraphs(12)).'</p>',
            'work_possibility' => mt_rand(0, 1),
            'avatar' => fake()->imageUrl(128, 128, true, 'people', $title),
        ];
    }
}
