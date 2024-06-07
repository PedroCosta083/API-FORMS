<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpcaoCampo extends Model
{
    protected $table = 'opcoes_campos';
    protected $hidden = [
        'updated_at',
        'created_at',
        'campoRelationship'
    ];

    // ----------------------------------------------------------------------------------------------------//
    public function campoRelationship()
    {
        return $this->belongsTo(Campo::class, 'tipos_campos_id');
    }

    public function getCampoAttribute()
    {
        return $this->campoRelationship;
    }
    public function setCampoAttribute($value)
    {
        if (isset($value)) {
            $this->attributes['campos_id'] = Campo::where('id', $value)->first()->id;
        }
    }





}
