<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Education = ['Faculty OF Computer Science','Master' ,'Becholor'];
        $StartingYear = ['2014','2016','2018'];
        $EndingYear = ['2019','2022','2024'];
        return [
            'ProfileID'=>rand(1,10),
            'ColledgeName'=>fake()->randomElement($Education),
            'StartingYear'=>fake()->randomElement($StartingYear),
            'EndingYear'=>fake()->randomElement($EndingYear)
        ];
    }
}
