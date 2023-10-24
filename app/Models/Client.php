<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StatusClient;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'last_name',
        'id_client_status',
        'created_at',
        'updated_at'
    ];

    public function getStatus()    
    {
        return $this->belongsTo(StatusClient::class, 'id_client_status', 'id');
    }
}
