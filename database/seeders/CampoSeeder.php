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
                'descrição' => 'Descrição do Campo 1',
                'rotulo' => 'Rótulo do Campo 1',
                'formulario_id' => 1, // O ID do formulário associado
                'tipo_campo_id' => 1, // o ID do tipo de campo associado
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Campo 2',
                'descrição' => null, // descrição está ausente para este registro
                'rotulo' => null, // rótulo está ausente para este registro
                'formulario_id' => 1,
                'tipo_campo_id' => 2, // o ID do tipo de campo associado
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
