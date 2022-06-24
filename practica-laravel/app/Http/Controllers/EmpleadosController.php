<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado\Cargo;
use App\Models\Empleado\Empleado;

class EmpleadosController extends Controller
{
    public function index(){
        $titulo = "Vista principal de empleados";
        $empleados = Empleado::orderBy('id','desc')->paginate(5);
        $cargos = Cargo::all();
        return view('Empleados.index', compact('titulo', 'empleados', 'cargos'));
    }
    public function crear(){
        $titulo = "Vista crear de empleados";
        return view('Empleados.crear');
    }
    public function mostrar(){
        $titulo = "Vista mostar de empleados";
        return view('Empleados.mostrar');
    }
    
    public function editar(){
        $titulo = "Vista crear de empleados";
        return view('Empleados.editar');
    }
    public function layout(){
        $titulo = "Vista crear de empleados";
        return view('Empleados.layout');
    }
    public function guardar(){
        return request();
    }
    //
}
