<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'clients';

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
}
