<html>
<body>
 
     <p>Departamento: </i> <?php echo e($dep['nombre_depto']); ?></p>
     <h2>Empleados</h2>
     <?php $__currentLoopData = $dep->empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>Nombre: <?php echo e($uno['nombre']); ?> <?php echo e($uno['apellido']); ?></p>
    <p>DNI: <?php echo e($uno['dni']); ?></p>
    <hr/>
    <br>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <a href="<?php echo e(route('empleados.store')); ?>">Volver</a>
</body>
<html>

<?php /**PATH /home/alvaror/laravel/proyemple/resources/views/departamento.blade.php ENDPATH**/ ?>