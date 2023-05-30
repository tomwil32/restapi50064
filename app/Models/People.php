<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'phone',
        'street',
        'city',
    ];

    protected $appends = [
        'full_name',
        'address',
    ];
    private mixed $city;
    private mixed $street;
    private mixed $name;
    private mixed $surname;

    public function getFullNameAttribute(): string
    {
        return $this->name . ' ' . $this->surname;
    }

    public function getAddressAttribute(): string
    {
        return $this->street . ', ' . $this->city;
    }

}

