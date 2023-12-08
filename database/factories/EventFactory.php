<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "headline"  => fake()->unique()->sentence(3,true),
            "tanggal"   => fake()->dateTime('now','Asia/Jakarta'),
            "bodytext"  => fake()->paragraph(5,true),
            "thumbnail" => fake()->imageUrl(1360,1080),
        ];
    }
}
