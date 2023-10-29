<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->realText(25);
        return [
            'title'     =>  $title,
            'slug'      =>  Str::slug($title),
            'content'   =>  fake()->realText(200),
            'thumbnail' =>  fake()->imageUrl,
            'active'    =>  fake()->boolean
        ];
    }
}
