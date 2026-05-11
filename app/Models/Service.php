<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['actividad_servicio'];

    public function soldiers()
    {
        return $this->belongsToMany(Soldier::class, 'soldier_service');
    }
}