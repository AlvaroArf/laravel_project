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
    <p>Nuevo registro: <a href="<?php echo e(route('empleados.create')); ?>">ALTA</a></p>
    <?php if($message = Session::get('success')): ?>
    	<p> <?php echo e($message); ?></p>
    <?php endif; ?>
    <table style="width:100%">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>Departamento</th>
        </tr>
        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($uno['nombre']); ?></td>
            <td><?php echo e($uno['apellido']); ?> </td>
            <td><?php echo e($uno['dni']); ?> </td>
            <td><a href="<?php echo e(route('departamentos.show', $uno['nombre_depto'])); ?>"><?php echo e($uno['nombre_depto']); ?></a> </td>
            <td>
                <form action="<?php echo e(route('empleados.destroy', $uno['id'])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" title="delete">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
<html>

<?php /**PATH /home/alvaror/laravel/proyemple/resources/views/todos.blade.php ENDPATH**/ ?>