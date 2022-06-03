<?php
session_start();
if ($_SESSION['login'] != "SI") {
    header("Location: login.php");
} else {
    $fechaguardada = $_SESSION['acceso'];
    $ahora = time();
    $tiempotranscurrido = $ahora - $fechaguardada;
    if ($tiempotranscurrido >= 1000) {
        session_destroy();
        header("Location: login.php");
    } else {
        $_SESSION['acceso'] = $ahora;
    }
}
