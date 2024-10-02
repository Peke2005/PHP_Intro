<?php 
  $DiaSemana = rand(1,10);

  echo "El numero es: $DiaSemana <br>";

  switch($DiaSemana){
    case 1:
      $Dia = "Lunes";
      break;
    case 2:
      $Dia = "Martes";
      break;
    case 3:
      $Dia = "Miercoles";
      break;
    case 4:
      $Dia = "Jueves";
      break;
    case 5:
      $Dia = "Viernes";
      break;
    case 6:
      $Dia = "Sabado";
      break;
    case 7:
      $Dia = "Domingo";
      break;
    default:
      echo "No hay mas dias solo hay del 1 al 7.";
      break;
  }
  if(!($DiaSemana > 7))
  echo "Hoy es: $Dia";
?>