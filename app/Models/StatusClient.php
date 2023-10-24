<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusClient extends Model
{
    use HasFactory;
    
    protected $table = 'status_client';

    protected $fillable = [
        'id',
        'description',
        'created_at',
        'updated_at'
    ];

    public function clients()
    {
        return $this->hasMany(Client::class, 'id_client_status', 'id');
    }
}
