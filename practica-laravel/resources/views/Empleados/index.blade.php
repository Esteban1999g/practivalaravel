<h1 style='text-align: center; color:brown'>{{$titulo}}</h1>
@forelse ($empleados as $empleado)
    <h5 style='color:brown'>{{$empleado['nombre']}}</h5>
    <br>
    <br>
@empty
    No hay empleados
@endforelse