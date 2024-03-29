<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    
    protected $table = 'maintenance';

    protected $fillable = [
        'id',
        'observation',
        'image',
        'id_products',
        'id_status_maintenance',
        'created_at',
        'updated_at'
    ];

    public function getStatus()    
    {
        return $this->belongsTo(StatusMaintenance::class, 'id_status_maintenance', 'id');
    }

    public function getProduct()    
    {
        return $this->belongsTo(Product::class, 'id_products', 'id');
    }

}
