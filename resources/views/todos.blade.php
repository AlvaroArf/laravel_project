<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <p>Nuevo registro: <a href="{{ route('empleados.create') }}">ALTA</a></p>
    @if ($message = Session::get('success'))
    	<p> {{ $message }}</p>
    @endif
    <table style="width:100%">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>Departamento</th>
        </tr>
        @foreach ($todos as $uno)
        <tr>
            <td>{{ $uno['nombre'] }}</td>
            <td>{{ $uno['apellido'] }} </td>
            <td>{{ $uno['dni'] }} </td>
            <td><a href="{{ route('departamentos.show', $uno['nombre_depto']) }}">{{ $uno['nombre_depto'] }}</a> </td>
            <td>
                <form action="{{ route('empleados.destroy', $uno['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="delete">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
<html>

