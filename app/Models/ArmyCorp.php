<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArmyCorp extends Model
{
    protected $fillable = ['denominacion'];

    public function soldiers()
    {
        return $this->hasMany(Soldier::class);
    }
}