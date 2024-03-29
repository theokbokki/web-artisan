<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
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
        $title = implode(' ', fake()->unique()->words(2));

        return [
            'created_at' => $created_at,
            'updated_at' => $updated_at,
            'title' => $title,
            'slug' => Str::slug($title),
            'credits' => mt_rand(2, 20),
            'hours' => mt_rand(15, 190),
            'body' => '<p>'.implode('</p><p>', fake()->paragraphs(12)).'</p>',
        ];
    }
}
