<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'OwnerID'=>rand(1,10),
            'Followers'=>rand(1,1000),
            'Following'=>rand(1,1000),
            'Viewers'=>rand(1,2000),
            'Photo'=>fake()->name()
        ];
    }
}
