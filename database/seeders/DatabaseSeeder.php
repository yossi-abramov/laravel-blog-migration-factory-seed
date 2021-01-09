<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(1)->create(); // Create a single user
        Post::factory(50)->create(); // Create 50 posts
        Tag::factory(8)->create(); // Create 8 tags

        foreach(Post::all() as $post){ // loop through all posts 
            $random_tags = Tag::all()->random(rand(2, 5))->pluck('id')->toArray();
            // Insert random post tag
            foreach ($random_tags as $tag) {
                DB::table('post_tags')->insert([
                    'post_id' => $post->id,
                    'tag_id' => $tag
                ]);
            }
        }
        
    }
}
