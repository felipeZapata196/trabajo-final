
<?php
if (!isset($_POST["opciones"]) || !isset($_POST["id"]) || !isset($_POST["date"])) {
    exit("No data provided");
}
include_once "functions.php";

$id = $_POST["id"];
$opciones = $_POST["opciones"];
$date = $_POST["date"];
asistencia_comedor($id, $date, $opciones);
header("Location: employees.php");
