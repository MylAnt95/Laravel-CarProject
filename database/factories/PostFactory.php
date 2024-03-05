<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\User;
use App\Models\CarBrand;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'car_brand_id' => CarBrand::factory(),
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
        ];
    }
}