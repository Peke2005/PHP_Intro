<?php 
  $num1 = rand(1,5);
  $num2 = rand(1,5);

  echo "El numero 1 es: $num1 <br>";
  echo "El numero 2 es: $num2 <br>";

  echo "La suma de los dos numeros es: ". $num1 + $num2  ."<br>";

  echo "La resta de los dos numeros es: ". $num1 - $num2  ."<br>";

  echo "La multiplicacion de los dos numeros es: ". $num1 * $num2  ."<br>";

  echo "La resta de los dos numeros es: ". $num1 / $num2  ."<br>";

  if($num1 > $num2){
    echo "El $num1 es mayor al $num2 <br>";
  }else if($num2 > $num1){
    echo "El $num2 es mayor al $num1 <br>";
  }else{
    echo "El $num1 es igual al $num2 <br>";
  }

  if ($num1 >= 1 && $num2 >= 1){
    $resultadoTriangulo = $num1 * $num2;
    $resultadoTriangulo2 = $resultadoTriangulo / 2;
    echo "El resultado del area del triangulo es: ". $resultadoTriangulo2 ."<br>";
  }
?>