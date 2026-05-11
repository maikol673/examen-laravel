<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['actividad'];

    public function soldiers()
    {
        return $this->hasMany(Soldier::class);
    }
}