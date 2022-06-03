<?php
include_once "header.php";

if (isset($_GET['errorusuario'])) {
    echo "Los datos son erroneos<br>";
}

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>



    <link href="css/login.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form ACTION="control.php" METHOD="POST">

            <h1 class="h1" style="padding-bottom: 2rem;">Comedor del colegio</h1>
            <h3 class="h3 mb-3 fw-normal">identificación</h3>

            <div class="form-floating">
                <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="nombre Alumno">
                <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">contraseña</label>
            </div>

            <div class="checkbox mb-3">
                <div class="col-12">
                    <p class="lead" style="font-size:medium;">¿No estás registrodo? Regístrate:</p>
                    <a href="formularioRegistro.php">Registro </i></a>
                </div>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>

        </form>


    </main>


</body>

</html>