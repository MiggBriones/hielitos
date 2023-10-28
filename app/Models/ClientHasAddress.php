<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientHasAddress extends Model
{
    use HasFactory;

    protected $table = 'clients_has_address';
    public $timestamps = false;

    protected $fillable = [
        'id_client',
        'id_address',
        'created_at'
    ];

}
