<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 1000),
            'post_id' => $this->faker->numberBetween(1, 1000),
            'title' => $this->faker->words(2, true),
            'body' => $this->faker->text,
            'slug' => Str::slug($this->faker->name),
        ];
    }
}
