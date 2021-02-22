<?php
$factorUno=$_POST['factorUno'];
$factorDos = $_POST['factorDos'];
$contador=0;
echo "<div style='border: red 3px solid; border-radius: 5px;'>";
for ($i=0; $i <= $factorDos ; $i++) { 
	echo $factorUno . "X" . $i . "=" . $factorUno * $i . "<br>";
}
echo "</div>";