<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'cpf_or_cnpj' => $this->generateCpfOrCnpj(),
            'phone_number' => $this->faker->unique()->phoneNumber,
            'address_street' => $this->faker->streetAddress,
            'street' => $this->faker->streetName,
            'neighborhood' => $this->faker->word,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
        ];
    }

    private function generateCpfOrCnpj(): string
    {
        return rand(0, 1) ? $this->generateCpf() : $this->generateCnpj();
    }

    private function generateCpf(): string
    {
        $cpf = $this->faker->numerify('#########');
        return $cpf . $this->calculateCpfDv($cpf);
    }

    private function generateCnpj(): string
    {
        $cnpj = $this->faker->numerify('########0001');
        return $cnpj . $this->calculateCnpjDv($cnpj);
    }

    private function calculateCpfDv($cpf): string
    {
        $d1 = 0;
        $d2 = 0;

        for ($i = 0; $i < 9; $i++) {
            $d1 += $cpf[$i] * (10 - $i);
            $d2 += $cpf[$i] * (11 - $i);
        }

        $d1 = 11 - ($d1 % 11);
        $d1 = ($d1 >= 10) ? 0 : $d1;

        $d2 += $d1 * 2;
        $d2 = 11 - ($d2 % 11);
        $d2 = ($d2 >= 10) ? 0 : $d2;

        return $d1 . $d2;
    }

    private function calculateCnpjDv($cnpj): string
    {
        $d1 = 0;
        $d2 = 0;
        $weights1 = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        $weights2 = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];

        for ($i = 0; $i < 12; $i++) {
            $d1 += $cnpj[$i] * $weights1[$i];
            $d2 += $cnpj[$i] * $weights2[$i];
        }

        $d1 = 11 - ($d1 % 11);
        $d1 = ($d1 >= 10) ? 0 : $d1;

        $d2 += $d1 * 2;
        $d2 = 11 - ($d2 % 11);
        $d2 = ($d2 >= 10) ? 0 : $d2;

        return $d1 . $d2;
    }
}
