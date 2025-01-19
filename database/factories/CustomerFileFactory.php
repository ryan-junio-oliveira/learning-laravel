<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\CustomerFile;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFileFactory extends Factory
{
    protected $model = CustomerFile::class;

    public function definition(): array
    {
        $hasInterest = $this->faker->boolean;

        return [
            'customer_id' => Customer::factory(),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'total_amount' => $this->faker->randomFloat(2, 100, 10000),
            'has_interest' => $hasInterest,
            'interest_rate' => $hasInterest ? $this->faker->randomFloat(2, 1, 10) : null,
        ];
    }
}

