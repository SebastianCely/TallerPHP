<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<title>Condicionales IF ELSE</title>
</head>
<body>
	<h1 style="color: red;">Bienvenido(a) a la "bascula" virtual</h1>
	<form action="../controlador/datos.php" method="POST">
		<div class="container">
			<div class="form-group">
				<label for="estatura">Ingrese su estatura sin punto:</label>
				<input type="text" name="estatura" id="estatura" class="form-control">
			</div>
			<div class="form-group">
				<label for="peso">Ingrese su peso:</label>
				<input type="text" name="peso" id="peso" class="form-control">
			</div>
			<div class="form-group">
				<button class="btn btn-warning" type="submit">Calcular</button>
			</div>
		</div>
	</form>
<script type="text/javascript" src="../assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>