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

    public function getProductWithBrand()
    {
        return $this->belongsTo(Brand::class, 'id_brand', 'id');
    }

    public function getProductWithCapacity()
    {
        return $this->belongsTo(Capacity::class, 'id_capacity', 'id');
    }

    public function getProductWithColor()
    {
        return $this->belongsTo(Color::class, 'id_color', 'id');
    }

    public function getProductWithEngineSize()
    {
        return $this->belongsTo(EngineSize::class, 'id_engine_size', 'id');
    }

    public function getProductWithGasType()
    {
        return $this->belongsTo(GasType::class, 'id_gas_type', 'id');
    }

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class, 'id_products', 'id');
    }
}
