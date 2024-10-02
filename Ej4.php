<?php
$dado = rand(1, 5);



/* Lado Opuesto en Numeros */

echo "El Numero en Int es: $dado <br>";
echo "El lado Opuesto en Int es: ";


switch ($dado) {
    case 1:
        $ladoOpuesto = 6;
        echo $ladoOpuesto;
        break;
    case 2:
        $ladoOpuesto = 5;
        echo $ladoOpuesto;
        break;
    case 3:
        $ladoOpuesto = 4;
        echo $ladoOpuesto;
        break;
    case 4:
        $ladoOpuesto = 3;
        echo $ladoOpuesto;
        break;
    case 5:
        $ladoOpuesto = 2;
        echo $ladoOpuesto;
        break;
    case 6:
        $ladoOpuesto = 1;
        echo $ladoOpuesto;
        break;
}

echo "<br>";
echo "<br>";

echo "El Numero en letras es ";

switch ($dado) {
    case 1:
        echo "Uno<br>";
        echo "El Lado Opuesto es Seis";
        break;
    case 2:
        echo "Dos<br>";
        echo "El Lado Opuesto es Cinco";
        break;
    case 3:
        echo "Tres<br>";
        echo "El Lado Opuesto es Cuatro";
        break;
    case 4:
        echo "Cuatro<br>";
        echo "El Lado Opuesto es Tres";
        break;
    case 5:
        echo "Cinco<br>";
        echo "El Lado Opuesto es Dos";
        break;
    case 6:
        echo "Seis<br>";
        echo "El Lado Opuesto es Uno";
        break;
}
?>