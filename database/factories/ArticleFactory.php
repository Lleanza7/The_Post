<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $defaultImagePath = 'public/images/default.jpg';
        return [
            'title' => $this->faker->sentence(),
            'subtitle' => $this->faker->sentence(),
            'body' => $this->faker->text(),
            'image' => $defaultImagePath,
            'category_id' => rand(1,6),
            'user_id' => rand(1,10),
            'slug' => $this->faker->slug(),
            
        ];
    }
}
