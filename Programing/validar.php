<?php
include_once 'conexion.php';
include_once 'class.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$clase = new Usuario($correo, $contrasena);
$clase -> insertar();

?>

