<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Story>
 */
class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'description' => '<h3>' . $this->faker->sentence . '</h3>'
                . '<p>' . implode('</p><p>', $this->faker->paragraphs) . '</p>'
                . '<h3>' . $this->faker->sentence . '</h3>'
                . '<p>' . implode('</p><p>', $this->faker->paragraphs) . '</p>'
                . '<h3>' . $this->faker->sentence . '</h3>'
                . '<p>' . implode('</p><p>', $this->faker->paragraphs) . '</p>',
            'status' => 1,
        ];
    }
}
