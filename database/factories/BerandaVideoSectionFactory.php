<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BerandaVideoSection>
 */
class BerandaVideoSectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "video_url" => "https://www.youtube.com/watch?v=2qyfsOe9cwk",
            "heading_1" => fake()->sentence(3,true),
            "heading_2" => fake()->sentence(3,true),
            "deskripsi" => fake()->text(200),
            "link"      => "https://www.youtube.com/@dkvittelkompurwokerto217"
        ];
    }
}
