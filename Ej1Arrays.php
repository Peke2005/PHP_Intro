<h1> Ejercico 1 </h1>
<?php
$persona = array(
    "dato 1º" => "Sara",
    "dato 2º" => "Martínez",
    "dato 3º" => 23,
    "dato 4º" => "Barcelona"
);

foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}
?>

<h1> Ejercico 2 </h1>
<?php
$persona = array(
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}
?>

<h1> Ejercico 3 </h1>
<?php
$persona["edad"] = 24;

foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}
?>


<h1> Ejercico 4 </h1>
<?php
unset($persona["ciudad"]);

echo "<pre>";
var_dump($persona);
echo "</pre>";
?>


<h1> Ejercico 5 </h1>
<?php
$letters = "a,b,c,d,e,f";

$arrayLetters = explode(",", $letters);

rsort($arrayLetters);

$totalLetters = count($arrayLetters);
foreach ($arrayLetters as $index => $letter) {
    echo "letter " . ($totalLetters - $index) . "º : " . $letter . "<br>";
}
?>

<h1> Ejercico 6 </h1>
<?php
$notas = array(
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
);

arsort($notas);

echo "Notas de los estudiantes: ";

foreach ($notas as $nombre => $nota) {
    echo "$nombre: $nota ";
}
?>

<h1> Ejercico 7 </h1>
<?php
$sumaNotas = array_sum($notas);
$totalEstudiantes = count($notas);
$media = $sumaNotas / $totalEstudiantes;

echo "La media de las notas es: " . number_format($media, 2) . "<br><br>";

echo "Alumnos con nota por encima de la media:<br>";
foreach ($notas as $nombre => $nota) {
    if ($nota > $media) {
        echo "$nombre: $nota<br>";
    }
}
?>

<h1> Ejercico 8 </h1>
<?php
    $notaAlta = 0;
    $Alumno = "";
    
    foreach($notas as $nombre => $nota){
        if($nota > $notaAlta){
            $notaAlta = $nota;
            $Alumno = $nombre;
        }
    }
    
    echo "La nota mas alta es $notaAlta y el mejor alumno es $Alumno";
?>
