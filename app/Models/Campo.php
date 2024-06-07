<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campo extends Model
{
    protected $hidden = [
        'updated_at',
        'created_at',
        'formularioRelationship',
        'tipocampoRelationship',
        'opcaocampoRelationship'
    ];

    // ----------------------------------------------------------------------------------------------------//
    public function formularioRelationship()
    {
        return $this->belongsTo(Formulario::class, 'formularios_id');
    }

    public function getFormularioAttributes()
    {
        return $this->formularioRelationship;
    }
    public function setFormularioAttribute($value)
    {
        if (isset($value)) {
            $this->attributes['formularios_id'] = Formulario::where('id', $value)->first()->id;
        }
    }
    // ----------------------------------------------------------------------------------------------------//
    public function tipocampoRelationship()
    {
        return $this->belongsTo(TipoCampo::class, 'tipos_campos_id');
    }

    public function getTipoCampoAttribute()
    {
        return $this->tipocampoRelationship;
    }

    public function setTipoCampoAttribute($value)
    {
        if (isset($value)) {
            $this->attributes['tipos_campos_id'] = TipoCampo::where('id', $value)->first()->id;
        }
    }

    // ----------------------------------------------------------------------------------------------------//
    public function opcaocampoRelationship()
    {
        return $this->hasMany(OpcaoCampo::class, 'campos_id');
    }

    public function getOpcaoCampoAttrubute()
    {
        return $this->opcaocampoRelationship;
    }
}
