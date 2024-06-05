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
                'descrição' => 'Campo de texto simples',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'select',
                'descrição' => 'Campo com opções selecionáveis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'radio',
                'descrição' => 'Botões de rádio onde o usuário pode selecionar apenas uma opção de um conjunto.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'checkbox',
                'descrição' => 'Caixa de seleção onde o usuário pode selecionar uma ou mais opções de um conjunto.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'textarea',
                'descrição' => 'Área de texto multilinha.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'email',
                'descrição' => 'Campo de entrada para endereço de e-mail.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
