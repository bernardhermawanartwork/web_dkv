<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karya>
 */
class KaryaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "judul_karya"       => fake()->unique()->sentence(3,true),
            "deskripsi"         => fake()->text(200),
            "author"            => fake()->name(),
            "link_portofolio"   => fake()->url(),
            "gambar"            => fake()->imageUrl(1080,1920)
        ];
    }
}
