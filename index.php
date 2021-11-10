<?php
include_once('includes/functions.php');
$empleados = getAllEmpleados();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    <h1>Empleados</h1>
    <a href="create.php">Crear</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($empleados as $empleado){?>
                <tr>
                    <td><?=$empleado['id']?></td>
                    <td><?=$empleado['nombre']?></td>
                    <td><?=$empleado['apellido']?></td>
                    <td><?=$empleado['telefono']?></td>
                    <td><a href="edit.php?id=<?=$empleado['id']?>">Editar</a></td>
                    <td><a href="delete.php?id=<?=$empleado['id']?>">Borrar</a></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>