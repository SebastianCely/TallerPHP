<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<title>WHILE</title>
</head>
<body>
	<h1 style="color: green;margin-left: 500px;">LISTADO DE NUMEROS</h1>
	<form action="../controlador/listado.php" method="POST">
		<div class="container" style="margin-left: 518px;">
			<div class="form-group">
				<label for="valor">Ingrese un numero:</label>
				<input type="text" name="valor" id="valor">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-danger">ENVIAR</button>
			</div>
		</div>
	</form>
<script type="text/javascript" src="../assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>