<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $created_at = Carbon::create(fake()->dateTimeBetween('-3 years', 'now'));
        $updated_at = random_int(1, 10) > 5 ? $created_at : $created_at->addWeeks(random_int(2, 8));
        $published_at = $created_at->addDays(random_int(0, 2) * random_int(2, 20));
        $title = fake()->sentence(10);

        return [
            'created_at' => $created_at,
            'updated_at' => $updated_at,
            'published_at' => $published_at,
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => '<p>'.implode('</p><p>', fake()->paragraphs(4)).'</p>',
            'solved_status' => mt_rand(0, 1),
        ];
    }
}
