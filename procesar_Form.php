<?php
session_start();
$_SESSION['nombres'] = $_POST['nombre'];
$_SESSION['apellidos'] = $_POST['apellido'];
?>

<a href="presentacion.php">Ver datos</a>