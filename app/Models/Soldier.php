<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    protected $fillable = ['nombre', 'apellido', 'grado', 'army_corp_id', 'quarter_id', 'company_id'];

    public function armyCorp()
    {
        return $this->belongsTo(ArmyCorp::class);
    }
    public function quarter()
    {
        return $this->belongsTo(Quarter::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function services()
    {
        return $this->belongsToMany(Service::class, 'soldier_service');
    }
}