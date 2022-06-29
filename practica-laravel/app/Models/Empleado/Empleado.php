<?php

namespace App\Models\Empleado;

use App\Models\Empleado\Cargo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    protected $guarded = []; // así lo vamos a dejar
    use HasFactory;
    public function cargoEmpleado(){
        return $this->belongsTo(Cargo::class, 'idCargo');
    }
}
