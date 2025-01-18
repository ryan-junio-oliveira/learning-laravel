<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\CustomerFile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'customer_file_id' => CustomerFile::factory(),
            'name' => $this->faker->word,
            'category' => $this->faker->word,
            'quantity' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
