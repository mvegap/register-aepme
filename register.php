<?php

include 'core/init.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Área de Exhibición - PUCP</title>
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="container">
		
		<p><img src="img/header.jpg" alt=""></p>

		<h1>Registro - Área de Exhibición</h1>
		<h2> - Ingreso Libre - </h2>

		<form action="register.php" method="POST">

			<label for="name">Apellido Paterno <span>(*)</span></label>
			<input type="text" name="paterno" id="paterno" required><br>

			<label for="name">Apellido Materno <span>(*)</span></label>
			<input type="text" name="materno" id="materno" ><br>
			
			<label for="name">Nombres <span>(*)</span></label>
			<input type="text" name="nombres" id="nombres" required><br>

			<label for="name">DNI <span>(*)</span></label>
			<input type="number" name="dni" id="dni" maxlength="8"><br>

			<label for="name">Correo electrónico</label>
			<input type="email" name="email" id="email" required>*<br>
		
			<div class="pre-buttons">
				<button type="submit">Registrarme</button>
				<button type="reset">Limpiar</button>
			</div>

			<legend class="contact-info">
				<p class="more-information">Más información:</p>
				<p><strong>Patricia Morales</strong> <a href="mailto:asistente2@prensagrupo.com">asistente2@prensagrupo.com</a> | <a href="mailto:info@prensagrupo.com">info@prensagrupo.com</a></p>
				<p><strong>Telf:</strong> 242-4029, 242-4731 anexo 20 | 997353296</p>
			</legend>
		</form>

	</div>

	<div class="footer"></div>

	<p class="permisos"><small>* El correo electrónico que ingrese será utilizado para futuras comunicaciones, y para la confirmación de su registro al área de exhibición.</small></p>

	
</body>
</html>