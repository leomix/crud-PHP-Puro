<?php 
include_once('includes/functions.php');
if(isset($_POST['nombre'])){
  $id_empleado =  createEmpleado($_POST['nombre'],$_POST['apellido'],$_POST['telefono']);
    header('Location: index.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
</head>
<body>
    <h1>Crear Empleado</h1>
    <form action="" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="">
    <br>
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apellido" value="">
    <br>
    <label for="telefono">Telefono:</label>
    <input type="text" name="telefono" id="telefono" value="">
    <br>
    <input type="submit" value="Crear">
    </form>
</body>
</html>