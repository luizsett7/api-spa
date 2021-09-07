<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampanhaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campanhas')->insert([
            'nome' => 'Campanha 1',
            'ativo' => '1',
            'grupo_id' => '1'                     
        ]);
    }
}
