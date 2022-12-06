<?php

namespace Database\Factories;


use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1002, 1731),
            'post_id' => $this->faker->numberBetween(1002, 1731),
            'title' => $this->faker->words(2, true),
            'body' => $this->faker->text,
            'slug' => Str::slug($this->faker->name),
        ];
    }
}
