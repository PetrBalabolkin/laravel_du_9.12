<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /* return [
            'name' => $this->faker->words(2),
            'slug' => $this->fake(),
            'description' => $this->fake()
        ]; */
        return [
            'name' => fake()->unique()->name,
            'description' => $this->faker->sentence(),
            'acronym' => fake()->slug,
            'number_of_all_students' => Str::random(4),
            'number_of_classes_next_year' => Str::random(4),
        ];
    }
}
