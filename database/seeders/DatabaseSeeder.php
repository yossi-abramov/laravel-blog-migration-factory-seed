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
            for ($i=0; $i < rand(2,5); $i++) { // loop randmoly between 2 to 5 times
                // Insert post tag
                DB::table('post_tags')->insert([
                    'post_id' => $post->id,
                    'tag_id' => Tag::all()->random(1)[0]->id
                ]);
            }
        }
        
    }
}
