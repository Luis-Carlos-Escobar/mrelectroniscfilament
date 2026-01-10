<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
    protected $table = 'evidencias';
    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion',
    ];

    public function proceso(){
        return $this->belongsTo(Proceso::class, 'proceso_id');
    }
}
