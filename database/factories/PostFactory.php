<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        
        $post = collect($this->faker->paragraphs(rand(5, 15)))
        ->map(function($item){
            return "<p>$item</p>";
        })->toArray();
        $post = implode($post);

        return [
            'user_id' => 1,
            'title' => $title,
            'description' => $this->faker->paragraph,
            'slug' => Str::slug($title),
            'post' => $post,
        ];
    }
}
