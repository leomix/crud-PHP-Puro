<?php
include_once('db.php');

function getAllEmpleados(){
   return DB::run("SELECT * FROM empleado")->fetchAll();
}

function getEmpleado($id){
    return DB::run("SELECT * FROM empleado WHERE id=?",[$id])->fetch();
}

function createEmpleado($nombre,$apellido,$telefono){
    DB::run("INSERT INTO empleado (nombre, apellido,telefono) VALUES(?,?,?)",[$nombre,$apellido,$telefono]);
    return DB::lastInsertId();
}

function updateEmpleado($nombre,$apellido,$telefono,$id){
    $stmt = DB::run("UPDATE empleado set nombre=?, apellido=?, telefono=? WHERE id=?",[$nombre,$apellido,$telefono,$id]);
    return  $stmt->rowCount();
}

function deleteEmpleado($id){
    DB::run("DELETE FROM empleado WHERE id=?",[$id]);
}