<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_cliente extends Model
{
    /** @use HasFactory<\Database\Factories\TipoClienteFactory> */
    use HasFactory;

    protected $fillable = [
        'descripcion_tipo'
    ];

    public function clientes() {
        return $this->belongsTo(Cliente::class);
    }
}
