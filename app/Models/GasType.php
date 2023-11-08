<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GasType extends Model
{
    use HasFactory;

    protected $table = 'gas_type';

    protected $fillable = [
        'id',
        'description',
        'created_at',
        'updated_at'
    ];

    public function getGasTypeWithProducts()
    {
        return $this->hasMany(Product::class, 'id_gas_type', 'id');
    }
}
