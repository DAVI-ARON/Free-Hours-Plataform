<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\project>
 */
class ProjectFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => fake()->words(5),
            'description' => fake()->randomHtml(),
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'status' ,
            'tech_stack',
            'created_by',
        ];
    }
}
