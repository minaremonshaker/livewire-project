<?php

namespace Database\Factories;

use App\Enums\FontAwesome;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),
            'excerpt' =>fake()->sentence(),
            'description' => fake()->sentence(100),
            'icon' => fake()->randomElement(FontAwesome::class)
        ];
    }
}
