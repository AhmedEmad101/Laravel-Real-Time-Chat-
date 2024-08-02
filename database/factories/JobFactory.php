<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $random = ['Software Engineer','web devoloper','Tester'];
        return [
           'PublisherID'=>1,
           'Title'=>fake()->randomElement( $random ),
           'Requirement'=>fake()->name(),
           'Description'=>fake()->name(),
           'Salary'=>rand(1000,50000)

        ];
    }
}
