<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoldierService extends Model
{
    protected $table = 'soldier_service';
    protected $fillable = ['soldier_id', 'service_id'];

    public function soldier()
    {
        return $this->belongsTo(Soldier::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}