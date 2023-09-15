<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //create all listing fields
            'user_id' => User::factory(),
            'title' => $this->faker->jobTitle,
            'tags' => $this->faker->words(3, true),
            'location' => $this->faker->city,
            'email' => $this->faker->email,
            'website' => $this->faker->url,
            'company' => $this->faker->company,
            'description' => $this->faker->paragraphs(5, true),
        ];
    }
}