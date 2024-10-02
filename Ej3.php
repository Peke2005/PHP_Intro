<?php 
    $num1 = rand(11, 20);
    $num2 = rand(11, 20);

    /* For del numero uno */
    echo "Ejercicio For <br>";
    echo "Numero 1 <br>";
    echo "El numero uno es: $num1 <br>";
    for($i = 0; $i <= $num1; $i++){
        echo "$i | <br>";
    }
    /* For del numero dos */
    echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------- <br>";
    echo "Ejercicio For <br>";
    echo "Numero 2 <br>";
    echo "El numero dos es: $num2 <br>";
    for($i = 0; $i <= $num2; $i++){
        echo "$i | <br>";
    }

    echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------- <br>";
    echo "Ejercicio While <br>";
    echo "Numero 1 <br>";
    echo "El numero uno es: $num1 <br>";
    /* While del numero uno */
    $i = 0;
    while($i <= $num1){
        echo "$i | <br>";
        $i++;
    }

    echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------- <br>";
    echo "Ejercicio While <br>";
    echo "Numero 2 <br>";
    echo "El numero dos es: $num2 <br>";
    /* While del numero dos */
    $i2 = 0;
    while($i2 <= $num2){
        echo "$i2 | <br>";
        $i2++;
    }

    echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------- <br>";
    echo "Ejercicio Do While <br>";
    echo "Numero 1 <br>";
    echo "El numero uno es: $num1 <br>";
    /* Do While del numero uno */
    $i3 = 0;
    do{
        echo "$i3 | <br>";
        $i3++;
    }while($i3 <= $num1);

    
    echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------- <br>";
    echo "Ejercicio Do While <br>";
    echo "Numero 2 <br>";
    echo "El numero dos es: $num2 <br>";
    /* Do While del numero uno */
    $i4 = 0;
    if($num1 > $num2){
        echo $num1;
    }else{
        do{
            echo "$i4 | <br>";
            $i4++;
        }while($i4 <= $num2);
    }
?>