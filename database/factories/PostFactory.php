<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            "title"=> $this->faker->sentence((mt_rand(1,5))),
            "category_id"=> $this->faker->numberBetween(1,4),
            "user_id"=> $this->faker->numberBetween(1,10),
            "slug"=> $this->faker->slug(2),
            "excerpt"=> $this->faker->sentence((mt_rand(4, 10))),
            "body"=> collect($this->faker->paragraphs((mt_rand(2, 15))))
            ->map(fn($p)=>"<p>$p</p>")
            ->implode(''),
        ];
    }
}
