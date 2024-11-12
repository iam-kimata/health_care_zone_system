<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
        'full_name',
        'gender',
        'phone_number',
        'email',
        'password',
    ];

    protected static function booted()
    {
        static::creating(function ($patient) {
            if (!$patient->role) {
                $patient->role = 'patient';
            }
        });
    }
}
