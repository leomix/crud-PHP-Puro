<?php
include_once('includes/functions.php');
if($_GET['id']){
    deleteEmpleado($_GET['id']);
    header("Location: index.php");
}