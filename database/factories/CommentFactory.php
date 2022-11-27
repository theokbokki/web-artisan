<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
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
            'body' => '<p>'.implode('</p><p>', fake()->paragraphs(12)).'</p>',
        ];
    }
}
