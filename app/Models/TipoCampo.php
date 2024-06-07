<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCampo extends Model
{
    protected $hidden = [
        'update_at',
        'created_at',
        'campoRelationship'
    ];

    protected $appends = [
        'nome',
        'descricao'
    ];

    public function campoRelationship(){
        return $this->hasMany(Campo::class, 'tipos_campos_id');
    }

    public function getCampoAttribute(){
        return $this->campoRelationship;
    }
    
    DB::table('tipos_campos')->insert([
        'nome' => 'Texto',
        'descricao' => 'Campo de texto'
    ]);



}
