<?php

namespace Database\Factories;

use App\Models\CarouselItems;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarouselModel>
 */
class CarouselItemsFactory extends Factory
{
    protected $model = CarouselItems::class;

    public function definition(): array
    {
        return [
            'carousel_name' => $this->faker->sentence(3), // Random name for the carousel
            'image_path' => $this->faker->imageUrl(), // Random image URL
            'description' => $this->faker->paragraph(), // Random description
            'user_id' => $this->faker->numberBetween(1, 1), // Random user ID, adjust range as needed
        ];
    }
}
