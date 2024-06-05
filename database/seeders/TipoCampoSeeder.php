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
                'nome' => 'Texto',
                'descrição' => 'Campo de texto simples',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Seleção',
                'descrição' => 'Campo com opções selecionáveis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
