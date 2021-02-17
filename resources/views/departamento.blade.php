<html>
<body>
 
     <p>Departamento: </i> {{ $dep['nombre_depto'] }}</p>
     <h2>Empleados</h2>
     @foreach ($dep->empleados as $uno)
    <p>Nombre: {{$uno['nombre']}} {{$uno['apellido']}}</p>
    <p>DNI: {{$uno['dni']}}</p>
    <hr/>
    <br>
     @endforeach
     <a href="{{ route('empleados.store') }}">Volver</a>
</body>
<html>

