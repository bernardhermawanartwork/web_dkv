<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "headline"      => fake()->unique()->sentence(5,true),
            "subheadline"   => fake()->sentence(5,true),
            "bodytext"      => fake()->paragraph(3,true),
            "thumbnail"     => fake()->imageUrl(1360,1080)
        ];
    }
}
