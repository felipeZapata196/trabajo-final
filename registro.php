<?php

include("con_db.php");

if (isset($_POST['register'])) {
	if (strlen($_POST['nombre']) >= 1) {
		$nombre = trim($_POST['nombre']);
		$contraseña = trim($_POST['contraseña']);
		$dni = trim($_POST['dni']);
		$curso = trim($_POST['curso']);
		$cuentaBancaria = trim($_POST['cuenta_bancaria']);


		$consulta = "INSERT INTO alumnos(nombre, contraseña, dni, curso, cuenta_bancaria) VALUES ('$nombre','$contraseña','$dni','$curso', '$cuentaBancaria' )";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
?>
			<h3 class="ok">¡Te has inscripto correctamente!</h3>''
		<?php
		} else {
		?>
			<h3 class="bad">¡Ups ha ocurrido un error!</h3>
		<?php
		}
	} else {
		?>
		<h3 class="bad">¡Por favor complete los campos!</h3>
<?php
	}
}

?>