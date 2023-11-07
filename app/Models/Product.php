<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'serial_number',
        'description',
        'doors_num',
        'door_type',
        'id_client',
        'id_brand',
        'id_capacity',
        'id_color',
        'id_engine_size',
        'id_gas_type',
        'created_at',
        'updated_at'
    ];
}
