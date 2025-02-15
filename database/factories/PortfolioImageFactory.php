<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PortfolioImage>
 */
class PortfolioImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'portfolio_id' => rand(1, 10),
            'image' => $this->faker->imageUrl(600, 425),
            'caption_image' => $this->faker->sentence(),
        ];
    }
}
