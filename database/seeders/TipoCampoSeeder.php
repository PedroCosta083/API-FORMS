<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TipoCampoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_campos')->insert([
            [
                'nome' => 'text',
                'descricao' => 'Campo de texto simples',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'select',
                'descricao' => 'Campo com opções selecionáveis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'radio',
                'descricao' => 'Botões de rádio onde o usuário pode selecionar apenas uma opção de um conjunto.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'checkbox',
                'descricao' => 'Caixa de seleção onde o usuário pode selecionar uma ou mais opções de um conjunto.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'textarea',
                'descricao' => 'Área de texto multilinha.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'email',
                'descricao' => 'Campo de entrada para endereço de e-mail.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
