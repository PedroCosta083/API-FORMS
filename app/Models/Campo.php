<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campo extends Model
{
    protected $hidden = [
        'update_at', 
        'created_at',
        'formularioRelationship',
        'tipocampoRelationship'
    ];

    protected $appends = [
        'nome', 
        'rotulo'
    ];

    public function formularioRelationship(){
        return $this->belongsTo(Formulario::class, 'formularios_id');
    }

    public function getFormularioAttributes(){
        return $this->formularioRelationship;
    }

    public function tipocampoRelationship(){
        return $this->belongsTo(TipoCampo::class, 'tipos_campos_id');
    }

    public function getTipoCampoAttribute(){
        return $this->tipocampoRelationship;
    }

    public function opcaocampoRelationship(){
        return $this->hasMany(OpcaoCampo::class, 'campos_id');
    }

    public function getOpcaoCampoAttrubute(){
        return $this->opcaocampoRelationship;
    }
}
