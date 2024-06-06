<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $hidden = [];

    protected $appends = [

    ];

    public function campoRelationship(){
        return $this->hasMany(Campo::class, 'formularios_id');
    }

    public function getCampoAttributes($value){
        return $this->campoRelationship;
    }


}
