<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class OpcaoCampoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('opcoes_campos')->insert([
            [
                'valor' => 'Opção 1',
                'rotulo' => 'Primeira Opção',
                'campos_id' => 2, // ID do campo relacionado
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'valor' => 'Opção 2',
                'rotulo' => 'Segunda Opção',
                'campos_id' => 2, // ID do campo relacionado
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
