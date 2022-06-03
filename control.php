<?php


include_once "functions.php";
include("con_db.php");





$nombre = $_POST['nombre'];
$contrasenya = $_POST['pass'];

$consulta = "SELECT * FROM alumnos WHERE nombre = '$nombre' AND contraseña = '$contrasenya'";
$resultado = mysqli_query($conex, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    session_start();
    $_SESSION['login'] = "SI";
    $_SESSION['acceso'] = time();
    header("Location: index.php");
} else {
    header("Location: login.php?errorusuario=si");
}
