<?php

namespace Database\Factories;

use App\Models\PostVote;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends Factory<PostVote>
 */
class PostVoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::factory(),
            'user_id' => User::factory(),
            'value' => fake()->randomElement([-1, 1]),
            'created_at' => now(),
        ];
    }
}
