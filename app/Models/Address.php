<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';
    
    protected $fillable = [
        'id',
        'street',
        'number',
        'zip_code',
        'longitude',
        'latitude',
        'status',
        'created_at',
        'updated_At'
    ];

}
