<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.88.1">
	<title>Checkout example · Bootstrap v5.1</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">



	<!-- Bootstrap core CSS -->
	<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/features/">

	<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


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


	<!-- Custom styles for this template -->
	<link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

	<div class="container">
		<main>
			<form method="post" class="signUp">
				<div class="py-5 text-center">
					<img class="d-block mx-auto mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
					<h2>Formulario de registro al comedor</h2>

				</div>

				<div class="row g-5">
					<div class="col-md-5 col-lg-4 order-md-last">



					</div>
					<div class="col-6">
						<h4 class="mb-3">Datos alumno</h4>
						<form class="needs-validation" novalidate>
							<div class="row g-3">
								<div class="col-sm-6">
									<label for="nombre" class="form-label">nombre</label>
									<input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre Alumno" value="" required>

								</div>

								<div class="col-sm-6">
									<label for="contraseña" class="form-label">Contraseña</label>
									<input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="***********" value="" required>

								</div>

								<div class="col-12">
									<label for="dni" class="form-label">dni</label>


									<input type="text" class="form-control" id="dni" name="dni" placeholder="Número DNI" required>
									<div class="invalid-feedback">
										Your username is required.
									</div>
								</div>
							</div>



							<div class="col-12">

								<label for="curso" class="form-label">curso</label>
								<select class="form-select" name="curso">
									<option disabled value="unset">--Select--</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>

							<div class="col-12">
								<label for="cuenta bancaria" class="form-label">Cuenta bancaria</label>


								<input type="text" class="form-control" id="dni" name="cuenta_bancaria" placeholder="Cuenta bancaria" required>
								<div class="invalid-feedback">
									Your username is required.
								</div>
							</div>
							<input style="margin-top:2rem; width:25%;" class="btn btn-success ml-2" type="submit" name="register">
					</div>




			</form>











			<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>


<?php
include("registro.php");

?>