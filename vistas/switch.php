<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<title>SWITCH</title>
</head>
<body>
	<h1 style="color: green;">¿QUE TE DICE TU COLOR FAVORITO?</h1>
	<form action="../controlador/colores.php" method="POST">
		<div class="container">
			<div class="form-group">
				<label for="color">Ingrese su color favorito:</label>
				<input type="text" name="color" id="color">
			</div>
			<div class="form-group">
				<button class="btn btn-info" type="submit">AVERIGUAR</button>
			</div>
		</div>
	</form>
<script type="text/javascript" src="../assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>