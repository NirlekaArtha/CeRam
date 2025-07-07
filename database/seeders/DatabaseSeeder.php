<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostRating;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat 10 user
        $users = User::factory(10)->create();

        // Buat 10 kategori
        $categories = Category::factory(10)->create();

        // Buat 100 post, assign 1 user per post, dan attach 1-3 kategori per post
        $posts = Post::factory(100)->make()->each(function ($post) use ($users, $categories) {
            $post->user_id = $users->random()->id;
            $post->save();
            $post->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

        // Setiap user save 3-10 post secara acak
        $posts = Post::all();
        $users->each(function ($user) use ($posts) {
            $user->savedPosts()->attach(
                $posts->random(rand(3, 10))->pluck('id')->toArray()
            );
        });

        // Setiap post di-rating oleh 5-10 user secara acak
        $posts->each(function ($post) use ($users) {
            $users->random(rand(3, 10))->each(function ($user) use ($post) {
                PostRating::create([
                    'post_id' => $post->id,
                    'user_id' => $user->id,
                    'rating' => rand(1, 5),
                ]);
            });
        });
    }
}
