<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    /** @use HasFactory<\Database\Factories\NotificacionFactory> */
    use HasFactory;
     protected $fillable = [
        'tarea_id',
        'mensaje',
        'fechaNotificacion',
        'user_id',
    ];

    public function tarea()
    {
        return $this->belongsTo(Tarea::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function NoLeidas($query)
    {
        return $query->where('leida', false);
    }
}
