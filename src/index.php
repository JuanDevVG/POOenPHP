<?php

    require("Consulta.php");

    $clientes = new Consulta('SELECT * FROM clientes');
    $arrayClientes = $clientes->getConsulta();

    $carritos = new Consulta('SELECT * FROM carritos WHERE Placa LIKE "asd1276"');
    $arrayCarritos = $carritos->getConsulta();
    

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Pruebas PHP</title>
</head>
<body>
    <h1>Pruebas de consulta con POO</h1>
    <?php
        echo "<h2>Clientes</h2>";
        echo "<table border>";
        echo "<tr>";
        echo "<th>Numero de licencia</th><th>Nombre</th><th>Telefono</th><th>Direccion</th>";
        echo "</tr>";
        foreach ($arrayClientes as $cliente){
            echo "<tr>";
            echo "<td>" . $cliente['numLicencia'] . "</td>";
            echo "<td>" . $cliente['Nombre'] . "</td>";
            echo "<td>" . $cliente['Telefono'] . "</td>";
            echo "<td>" . $cliente['Direccion'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<h2>Carritos</h2>";
        echo "<table border>";
        echo "<tr>";
        echo "<th>Placa</th><th>Especificacion</th><th>PrecioRentaHora</th>
            <th>PrecioRentaSemana</th><th>Color</th><th>Modelo</th><th>Kilometraje</th><th>Disponibilidad</th>";
        echo "</tr>";
        
        foreach ($arrayCarritos as $carrito){
            echo "<tr>";
            echo "<td>" . $carrito['Placa'] . "</td>";
            echo "<td>" . $carrito['Especificacion'] . "</td>";
            echo "<td>" . $carrito['PrecioRentaHora'] . "</td>";
            echo "<td>" . $carrito['PrecioRentaSemana'] . "</td>";
            echo "<td>" . $carrito['Color'] . "</td>";
            echo "<td>" . $carrito['Modelo'] . "</td>";
            echo "<td>" . $carrito['Kilometraje'] . "</td>";
            echo "<td>" . $carrito['Disponibilidad'] . "</td>";
            echo "</tr>";
        }
        echo "</table>"; 
    ?>

</body>
</html>