<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'telefono',
        'departamento_id',
        'tipo_cliente_id'
    ];

    public function departamentos() {
        return $this->hasMany(Departamento::class);
    }
    public function tipo_cliente() {
        return $this->hasMany(Tipo_cliente::class);
    }
}
