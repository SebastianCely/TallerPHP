<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<title>FOR</title>
</head>
<body style="background-image: url(../assets/img/kirby.jpg); background-repeat: no-repeat;">
	<h1 style="margin-left: 300px;">TABLA DE MULTIPLICACION</h1>
	<form action="../controlador/multiplicacion.php" method="POST">
		<div class="container" style="border: red 5px solid; border-radius: 5px;">
			<div class="form-group">
				<label for="factorUno">Ingrese el primer factor:</label>
				<input type="text" name="factorUno">
			</div>
			<div class="form-group">
				<label for="factorDos">Ingrese el segundo factor</label>
				<input type="text" name="factorDos">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
		</div>
	</form>
<script type="text/javascript" src="../assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>