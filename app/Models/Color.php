<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = 'color';

    protected $fillable = [
        'id',
        'description',
        'created_at',
        'updated_at'
    ];

    public function getColorWithProducts()
    {
        return $this->hasMany(Product::class, 'id_color', 'id');
    }
}
