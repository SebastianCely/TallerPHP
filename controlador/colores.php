<?php
$color = $_POST['color'];
switch ($color) {
	case 'amarillo':
		echo "<body style='background-color:yellow;'><p>Es el color de la alegría, el optimismo y la energía. En un tono pálido, es lúgubre y representa preocupación, deterioro, enfermedad, envidia o celos.</p></body>";
		break;
	case 'azul':
		echo "<body style='background-color:#8080ff;'><p>El azul representa estabilidad. El azul marino es asociado a la profundidad, al orden de lo sagrado, a la inmortalidad y al poder.</p></body>";
		break;
	case 'verde':
		echo "<body style='background-color:#33ff33;'><p>Significa: Frescura, Medio ambiente, Armonía, Salud, Curación, Juventud, Dinero, Naturaleza, Renovación, Tranquilidad.</p></body>";
		break;
	case 'cafe':
		echo "<body style='background-color:#b37700;'><p>El color marrón (color café en latinoamérica), es un color asociado frecuentemente con la neutralidad, o bien, con emociones desagradables. Se trata de un estímulo cromático muy presente en la naturaleza, por lo que tiene también significados ambivalentes, así como muchos usos distintos.</p></body>";
		break;
	case 'naranja':
		echo "<body style='background-color:#ff751a;'><p>El naranja significa entusiasmo y exaltación, y cuando es muy encendido o más bien rojizo, denota ardor y pasión.</p></body>";
		break;
	case 'negro':
		echo "<body style='background-color:#bfbfbf;'><p>El color negro se asocia a la noche y a la ausencia de luz. Por tanto, es por encima de todo el color del misterio.</p></body>";
		break;
	case 'blanco':
		echo "<p>En Occidente el blanco simboliza la pureza y la inocencia, mientras que en algunos países de Oriente, como China e India, está asociado al luto.</p>";
		break;
	
	default:
		echo "<body style='background-image:url(../assets/img/arcoiris.webp); background-repeat:no-repeat;'>Pues no tengo el significado para ese color, pero en cambio le dire datos sobre el arcoiris</body>";
		echo "<p>En psicología, los colores ejercen influencia en el individuo, ya que provocan una reacción cerebral según el color de que se trate. Por ejemplo: existen colores que logran tranquilizar al individuo, como es el caso del color rosado.
			Por su parte, el color rojo provoca excitación y energía. En conclusión, cada color produce efectos en las sustancias neurotransmisoras cerebrales.</p>";
		break;
}