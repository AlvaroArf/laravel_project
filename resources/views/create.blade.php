<html>
<body>
  <h2>HTML Forms</h2>

<form action="{{ route('empleados.store') }}" method="POST">
  @csrf
  <label for="fname">Nombre:</label><br>
  <input type="text" id="Nombre" name="nombre" required><br>
  <label for="fname">Apellido:</label><br>
  <input type="text" id="Apellido" name="apellido" required><br>
  <label for="lname">DNI:</label><br>
  <input type="text" id="dni" name="dni" required><br><br>
  <label for="lname">Departamento:</label><br>
  <input type="text" id="nombre_depto" name="nombre_depto" required><br><br>
  <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

