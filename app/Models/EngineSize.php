<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineSize extends Model
{
    use HasFactory;

    protected $table = 'engine_size';

    protected $fillable = [
        'id',
        'size',
        'created_at',
        'updated_at'
    ];

    public function getEngineSizeWithProducts()
    {
        return $this->hasMany(Product::class, 'id_engine_size', 'id');
    }
}
