<?php 
include_once('includes/functions.php');
if(isset($_POST['nombre'])){
    updateEmpleado($_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_GET['id']);
    header('Location: index.php');
}
if($_GET['id']){

    $empleado = getEmpleado($_GET['id']); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
</head>
<body>
    <h1>Editar Empleado</h1>
    <?php if($empleado){?>
        <form action="edit.php?id=<?=$empleado['id']?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?=$empleado['nombre']?>">
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="<?=$empleado['apellido']?>">
        <br>
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono" value="<?=$empleado['telefono']?>">
        <br>
        <input type="submit" value="Editar">
        </form>
    <?php }else{?>
      <h2>no hay empleado</h2>
    <?php }?>
</body>
</html>