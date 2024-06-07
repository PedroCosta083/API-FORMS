<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpcaoCampo extends Model
{
    protected $table = 'opcoes_campos';
    protected $hidden = [
        'update_at',
        'created_at',
        'campoRelationship'
    ];

    protected $appends = [
        'valor',
        'rotulo',
        'campos_id'
    ];

    public function campoRelationship()
    {
        return $this->belongsTo(Campo::class, 'tipos_campos_id');
    }

    public function getCampoAttribute()
    {
        return $this->campoRelationship;
    }



}
