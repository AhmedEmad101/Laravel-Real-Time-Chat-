<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hire>
 */
class HireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'HirerID'=>rand(1,10),
            'HiredID'=>rand(1,10),
            'JobID'=>rand(1,10)
        ];


    }
}
