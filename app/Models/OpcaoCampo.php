<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpcaoCampo extends Model
{
    protected $hidden = [
        'update_at',
        'created_at',
        'campoRelationship'
    ];

    protected $appends = [
        'valor',
        'rotulo'
    ];

    public function campoRelationship(){
        return $this->hasMany(Campo::class, 'tipos_campos_id');
    }

    public function getCampoAttribute(){
        return $this->campoRelationship;
    }

    protected $table = 'opcoes_campos';

}
