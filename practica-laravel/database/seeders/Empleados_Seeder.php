<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado\Empleado;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Empleados_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo = DB::table('cargos')->where(['nombre'=>'Instructor'])->value('id');

        Empleado::create([
        'nombre'=> 'Dony Cardenas',
        'email' => 'cardenasdonny@gmail.com',
        'direccion' => 'calle 123456',
        'edad' => 36,
        'idCargo' => $cargo
    ]);

        Empleado::create([
        'nombre'=> 'alvaro uribe',
        'email' => 'auribe@gmail.com',
        'direccion' => 'calle 1827637',
        'edad' => 34,
        'idCargo' => 2
    ]);

        Empleado::create([
        'nombre'=> 'andres castro',
        'email' => 'acastro@gmail.com',
        'direccion' => 'calle 298363',
        'edad' => 16,
        'idCargo' => 1
    ]);

        Empleado::create([
        'nombre'=> 'alberto gonzales',
        'email' => 'agonzales@gmail.com',
        'direccion' => 'calle 0197272',
        'edad' => 24,
        'idCargo' => 3
    ]);
    }
}
