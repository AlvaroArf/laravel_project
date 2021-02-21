 # LARAVEL CRUD PROJECT - ELOQUENT RELATIONSHIP

## Pasos a seguir

  1. git clone del repositorio
  2. Nos posicionamos en la raiz del proyecto y generamos el directorio vendor con la siguiente orden:
      
    composer install
    
  3. Modificamos el fichero .env con el motor de BD que deseemos junto al nombre de la base de datos y las credenciales
  4. Nos situamos en la raiz del proyecto y generamos las tablas en la base de datos con la siguiente orden:
 
    php artisan migrate
    
  5. Por último, en la raiz del proyecto lanzamos la siguiente orden para desplegarla:
  
    php artisan serve
    
    
  6. Datos de prueba:
  
    INSERT INTO departamentos (nombre_depto, descripcion) VALUES ("DW", "Desarrolladores Web");
    INSERT INTO departamentos (nombre_depto, descripcion) VALUES ("MD", "Modelado");
    INSERT INTO departamentos (nombre_depto, descripcion) VALUES ("SPT", "Soporte");
    
    INSERT INTO empleados (nombre, apellido, dni, nombre_depto) VALUES ("Alvaro", "Rojas", "12345678F", "DW");
    INSERT INTO empleados (nombre, apellido, dni, nombre_depto) VALUES ("Alejandro", "Manzano", "87654321Q", "SPT");
    
  Para acceder al recurso introducermos el siguiente recurso:
    http://localhost:8000/empleados/


