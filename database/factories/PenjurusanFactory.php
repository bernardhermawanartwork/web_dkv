<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penjurusan>
 */
class PenjurusanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama_jurusan"  => fake()->unique()->word(),
            "deskripsi"     => fake()->unique()->text(200),
            "icon"          => "icon"
        ];
    }
}
