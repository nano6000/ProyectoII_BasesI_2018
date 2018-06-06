<?php

    include_once 'scripts/conexion.inc';
    $usuario = $_SESSION['username'];

    $stmt = $conn->query("call obtenerProducto('$usuario')");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "<td class='text-center'> <img src='uploads/" . $row[1] . "' height='75px' width='125px'></td>";

        echo "</tr>";
    }

?>
