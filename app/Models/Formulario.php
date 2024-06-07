<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $hidden = [
        'updated_at',
        'created_at',

    ];

    public function campoRelationship()
    {
        return $this->hasMany(Campo::class, 'formularios_id');
    }

    public function getCampoAttributes()
    {
        return $this->campoRelationship;
    }




}
