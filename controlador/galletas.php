<?php
$galletas = $_POST['galletas'];
$contador=1;
echo "<h1>AQUI ESTAN SUS GALLETAS</h1>";
do{
	echo "<img src='../assets/img/galleta.jpg'></img>"."</br>";
	$contador++;
}
while ($contador <= $galletas);