<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <h1>Supermarket managment</h1>
        work name: <input type="text" name="workName"> <br> <br>

        <h1>Choose product:</h1>
        <select name="producto" id="producto">
            <option value="refresco">Refresco</option>
            <option value="leche">Leche</option>
        </select>
        <h1>Product quantity:</h1>
        <input type="number" name="cantidadProducto"> <br> <br>
        <input type="submit" value="add" name="add">
        <input type="submit" value="remove" name="remove">
        <input type="submit" value="reset" name="reset">
    </form>
    <div class="inventario">
        <h1>Inventario:</h1>
    </div>
</body>
</html>

<?php 
  session_start();
  

  $inventario = [
    "refresco" => 0,
    "leche" => 0
];

  if (isset($_GET["workName"]) && isset($_GET["producto"]) && isset($_GET["cantidadProducto"])) {

    $_SESSION['workName1'] = $_GET["workName"];
    $productoEelegido = $_SESSION['producto1'] = $_GET["producto"];
    $prodcutoCantidad = $_SESSION['cantidadProducto1'] = $_GET["cantidadProducto"];

    $_SESSION['inventario'] = $inventario;


    if(isset($_GET["add"])){
        $_SESSION['inventario'][$productoEelegido] += $prodcutoCantidad;
        var_dump($inventario);
        echo "Leche:". $inventario["leche"];
    }

}



?>