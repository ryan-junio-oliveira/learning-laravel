<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address_street',
        'street',
        'neighborhood',
        'city',
        'state',
        'country',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function custumerFile(): HasOne
    {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }

    public function getCpfOrCnpjAttribute($value)
    {
        return $this->formatCpfOrCnpj($value);
    }

    // Limpar a formatação antes de salvar no banco
    public function setCpfOrCnpjAttribute($value)
    {
        $this->attributes['cpf_or_cnpj'] = $this->clearFormatting($value);
    }

    // Função para limpar formatação (retira pontos, traços, barras, etc)
    private function clearFormatting($value)
    {
        return preg_replace('/[^0-9]/', '', $value);
    }

    // Função para formatar CPF ou CNPJ
    private function formatCpfOrCnpj($value)
    {
        $value = $this->clearFormatting($value);

        if (strlen($value) === 11) {
            // Formatar como CPF: 000.000.000-00
            return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $value);
        }

        if (strlen($value) === 14) {
            // Formatar como CNPJ: 00.000.000/0000-00
            return preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $value);
        }

        return $value; // Retorna sem formatação se não for válido
    }
}
