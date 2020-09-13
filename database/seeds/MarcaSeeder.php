<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('marcas')->insert([
            [
                'marca' => 'Acura',
                'representante' => 'Honda Mexico'
            ],
            [
                'marca' => 'Alfa Romeo',
                'representante' => 'FCA Group'
            ],
            [
                'marca' => 'ASTON MARTIN',
                'representante' => 'db imports'
            ],
            [
                'marca' => 'Audi',
                'representante' => 'Volkswagen de Mexico S.A.'
            ],
            [
                'marca' => 'BAIC',
                'representante' => 'BAIC Mexico'
            ],
            [
                'marca' => 'Bentley',
                'representante' => 'BENTLEY POLANCO'
            ],
            [
                'marca' => 'BMW',
                'representante' => 'BMW DE MEXICO S.A.'
            ],
            [
                'marca' => 'BUICK',
                'representante' => 'GENERAL MOTORS DE MEXICO'
            ]
        ]);
    }
}
