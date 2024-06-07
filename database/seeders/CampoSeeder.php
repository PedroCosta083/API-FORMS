<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CampoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserir dados na tabela 'campos'
        DB::table('campos')->insert([
            [
                'nome' => 'Campo 1',
                'rotulo' => 'Rótulo do Campo 1',
                'formularios_id' => 1, // O ID do formulário associado
                'tipos_campos_id' => 1, // o ID do tipo de campo associado
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Campo 2',
                'rotulo' => null, // rótulo está ausente para este registro
                'formularios_id' => 1,
                'tipos_campos_id' => 2, // o ID do tipo de campo associado
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
