<?php
$totalSuma = 0;
$totalPares = 0;
$totalImpares = 0;

echo "<h3>Números generados:</h3>";

while ($totalSuma <= 100) {
    $numero = rand(0, 20);
    echo $numero . " ";

    $totalSuma += $numero;
    
    if ($numero % 2 == 0) {
        $totalPares++;
    } else {
        $totalImpares++;
    }
}

echo "<p>Suma total de los valores generados: $totalSuma</p>";
echo "<p>Total de números pares: $totalPares</p>";
echo "<p>Total de números impares: $totalImpares</p>";
?>