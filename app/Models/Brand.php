<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brand';

    protected $fillable = [
        'id',
        'description',
        'created_at',
        'updated_at'
    ];

    public function getBrandWithProducts()
    {
        return $this->hasMany(Product::class, 'id_brand', 'id');
    }
}
