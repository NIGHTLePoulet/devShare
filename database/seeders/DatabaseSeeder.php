<?php

namespace Database\Seeders;

use App\Models\CommentVote;
use App\Models\PostVote;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory()->count(5)->create();

        foreach ($users as $user) {
            Post::factory()->create([
               'user_id' => $user->id,
            ]);

            Comment::factory()->create([
               'user_id' => $user->id,
               'post_id' => Post::inRandomOrder()->first()->id
            ]);
        }

        foreach ($users as $user) {
            PostVote::factory()->create([
                'user_id' => $user->id,
                'post_id' => Post::inRandomOrder()->first()->id,
            ]);

            CommentVote::factory()->create([
                'user_id' => $user->id,
                'comment_id' => Comment::inRandomOrder()->first()->id,
            ]);
        }
    }
}
