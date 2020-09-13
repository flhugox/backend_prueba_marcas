<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('autos')->insert([
            [
                'modelo' => 'Model SX',
                'year' => '2020',
                'id_marca' => '1'
            ],
            [
                'modelo' => 'Model SX',
                'year' => '2020',
                'id_marca' => '2'
            ],
            [
                'modelo' => 'Model C',
                'year' => '2020',
                'id_marca' => '3'
            ],
            [
                'modelo' => 'Model C',
                'year' => '2020',
                'id_marca' => '4'
            ],
            [
                'modelo' => 'Model B',
                'year' => '2020',
                'id_marca' => '5'
            ],
            [
                'modelo' => 'Model B',
                'year' => '2020',
                'id_marca' => '6'
            ],

        ]);
    }
}
