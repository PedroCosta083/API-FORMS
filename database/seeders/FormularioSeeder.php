<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FormularioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserir dados na tabela 'formularios'
        DB::table('formularios')->insert([
            [
                'titulo' => 'Exemplo de Formulário 1',
                'descricao' => 'Este é um exemplo de descrição para o Formulário 1.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Exemplo de Formulário 2',
                'descricao' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
