<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    /** @use HasFactory<\Database\Factories\TareaFactory> */
    use HasFactory;

     protected $fillable = [
        'titulo',
        'descripcion',
        'tipo',
        'estado',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function notificacion()
    {
        return $this->hasMany(Notificacion::class);
    }

    public function Pendientes($query)
    {
        return $query->where('estado', 'pendiente');
    }
}
