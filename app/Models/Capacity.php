<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    use HasFactory;

    protected $table = 'capacity';

    protected $fillable = [
        'id',
        'capacity',
        'created_at',
        'updated_at'
    ];

    public function getCapacityWithProducts()
    {
        return $this->hasMany(Product::class, 'id_capacity', 'id');
    }
}
