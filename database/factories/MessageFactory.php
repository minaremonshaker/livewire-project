<?php

namespace Database\Factories;

use App\Enums\MessageStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'email' => fake()->email(),
            'message' => fake()->sentence(300),
            'status' => fake()->randomElement([0,1])
        ];
    }
}
