<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'cpf_or_cnpj' => [
                'required',
                'string',
                'unique:customers',
                function ($attribute, $value, $fail) {
                    $cleaned = preg_replace('/[^0-9]/', '', $value);
                    if (!(strlen($cleaned) === 11 || strlen($cleaned) === 14)) {
                        $fail('O ' . $attribute . ' deve ser um CPF ou CNPJ válido.');
                    }
                },
            ],
            'phone_number' => 'required|string|max:13|unique:customers',
            'street' => 'required|string|max:255',
            'neighborhood' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ];
    }
}
