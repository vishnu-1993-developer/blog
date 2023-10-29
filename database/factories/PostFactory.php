<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;
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
    public function definition(): array
    {
        $title = fake()->realText(50);
        return [
            'title'     =>  $title,
            'slug'      =>  Str::slug($title),
            'thumbnail' =>  fake()->imageUrl,
            'body'      =>  fake()->realText(500),
            'active'    =>  fake()->boolean,
            'featured'  =>  fake()->boolean,
            'published_at'  =>  fake()->dateTime,
            'user_id'       =>  1
        ];
    }
}
