<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Cargos_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
            'nombre'=> 'Instructor',
        ]);

        DB::table('cargos')->insert([
            'nombre'=> 'Director',
        ]);

        DB::table('cargos')->insert([
            'nombre'=> 'Coordinador',
        ]);
    }
}
