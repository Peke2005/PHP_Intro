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
        work name: <input type="text" name="workName" required> <br> <br>

        <h1>Choose product:</h1>
        <select name="producto" id="producto" required>
            <option value="refresco">Refresco</option>
            <option value="leche">Leche</option>
        </select>
        <h1>Product quantity:</h1>
        <input type="number" name="cantidadProducto" required> <br> <br>
        <input type="submit" value="add" name="add">
        <input type="submit" value="remove" name="remove">
        <input type="reset" value="reset" name="reset">
    </form>
    <div class="inventario">
        <h1>Inventario:</h1>
    </div>
</body>
</html>

<?php 
session_start();

if(!isset($_SESSION['inventario'])){

    $_SESSION['inventario'] = [
        "refresco" => 0,
        "leche" => 0
    ];
   
}

  if (isset($_GET["workName"]) && isset($_GET["producto"]) && isset($_GET["cantidadProducto"])) {

    $_SESSION['workName1'] = $_GET["workName"];
    $productoElegido = $_SESSION['producto1'] = $_GET["producto"];
    $prodcutoCantidad = $_SESSION['cantidadProducto1'] = $_GET["cantidadProducto"];

    if(isset($_GET["add"])){
        $_SESSION['inventario'][$productoElegido] += $prodcutoCantidad;
        echo "Worker: ". $_SESSION['workName1'] ."<br> <br>";
        echo "Refresco: ". $_SESSION['inventario']["refresco"] ."<br> <br>";
        echo "Leche: ". $_SESSION['inventario']["leche"];
    }

    if(isset($_GET["remove"])){
        if($_SESSION['inventario'][$productoElegido] - $prodcutoCantidad >= 0){
            $_SESSION['inventario'][$productoElegido] -= $prodcutoCantidad;
            echo "Worker: ". $_SESSION['workName1'] ."<br> <br>";
            echo "Refresco: ". $_SESSION['inventario']["refresco"] ."<br> <br>";
            echo "Leche: ". $_SESSION['inventario']["leche"];
        }else{
            echo "Worker: ". $_SESSION['workName1'] ."<br> <br>";
            echo "Refresco: ". $_SESSION['inventario']["refresco"] ."<br> <br>";
            echo "Leche: ". $_SESSION['inventario']["leche"] ."<br> <br>";
            echo "No se puede restar mas productos de los que hay";
        }
    }
}
?>