<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCampo extends Model
{
    protected $table = 'tipos_campos';
    protected $hidden = [
        'updated_at',
        'created_at',
        'campoRelationship'
    ];


    public function campoRelationship()
    {
        return $this->hasMany(Campo::class, 'tipos_campos_id');
    }

    public function getCampoAttribute()
    {
        return $this->campoRelationship;
    }





}
