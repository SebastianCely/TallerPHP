<?php
$tabla = "<h1>";
$estatura = $_POST['estatura'];
$peso = $_POST['peso'];
if ($estatura >=185) {
	if ($peso >= 40 && $peso <= 74) {
		$tabla.="Usted es un muerto de hambre"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/esqueleto.jpg'></img>";
	}
	elseif ($peso >=75 && $peso <=99) {
		$tabla.="Felicidades, no le podran decir esqueleto viviente o señor barriga"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/goku.jpg'></img>";
	}
	elseif ($peso >=100 && $peso <=119) {
		$tabla.="Mijo, no debio comer tanta picada, GORDOO"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/gordo.png'></img>";
	}
	elseif ($peso >= 120) {
		$tabla.="Guau, para usted debe ser todo un reto mover siquiera un brazo"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/sobrepeso.jpg'></img>";
	}
}
elseif ($estatura>=170 && $estatura <=184) {
	if ($peso >= 40 && $peso <= 54) {
		$tabla.="Usted es un muerto de hambre"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/esqueleto.jpg'></img>";
	}
	elseif ($peso >=55 && $peso <=74) {
		$tabla.="Felicidades, no le podran decir esqueleto viviente o señor barriga"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/goku.jpg'></img>";
	}
	elseif ($peso >=75 && $peso <=89) {
		$tabla.="Mijo, no debio comer tanta picada, GORDOO"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/gordo.png'></img>";
	}
	elseif ($peso >= 90 && $peso<=119) {
		$tabla.="Guau, para usted debe ser todo un reto mover siquiera un brazo"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/sobrepeso.jpg'></img>";
	}
	elseif ($peso >= 120) {
		$tabla.="El dia en que usted decida hacer una clavado en alguna piscina, causara otro tsunami en Japon"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/morbido.jpg'></img>";
	}
}
elseif ($estatura<=169) {
	if ($peso >= 40 && $peso <= 54) {
		$tabla.="Usted es un muerto de hambre"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/esqueleto.jpg'></img>";
	}
	elseif ($peso >=55 && $peso <=69) {
		$tabla.="Felicidades, no le podran decir esqueleto viviente o señor barriga"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/goku.jpg'></img>";
	}
	elseif ($peso >=70 && $peso <=84) {
		$tabla.="Mijo, no debio comer tanta picada, GORDOO"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/gordo.png'></img>";
	}
	elseif ($peso >= 85 && $peso<=109) {
		$tabla.="Guau, para usted debe ser todo un reto mover siquiera un brazo"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/sobrepeso.jpg'></img>";
	}
	elseif ($peso >= 110) {
		$tabla.="El dia en que usted decida hacer una clavado en alguna piscina, causara otro tsunami en Japon"."</h1>";
		echo $tabla;
		echo "<img src='../assets/img/morbido.jpg'></img>";
	}
}