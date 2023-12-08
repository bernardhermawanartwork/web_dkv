<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BerandaHero>
 * source https://github.com/fzaninotto/Faker
 */
class BerandaHeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "judul_hero" => fake()->realText(200,1),
            "isi_hero"   => fake()->realText(200,3),
            "gambar"     => fake()->imageUrl(1920,1166),
            "link"       => fake()->url()
        ];
    }
}
