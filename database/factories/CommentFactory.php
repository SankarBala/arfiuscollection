<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            'body' => $this->faker->text(),
            'commentable_id' => random_int(1, 10),
            'commentable_type' => "App\Models\Post",
            'status' => ['draft', 'approved', 'spam'][rand(0, 2)]
        ];
    }
}
