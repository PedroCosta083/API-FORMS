<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $hidden = [
        'update_at',
        'created_at',
        'campoRelationship',

    ];

    protected $appends = [
        'titulo',
        'descricao'
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
