<?php

    include_once 'scripts/conexion.inc';
    $comercio = $_SESSION['comercio'];

    $stmt = $conn->query("call obtenerProducto('$comercio')");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td> <h6>" . $row[2] . "</h> </td>";
        echo "<td> <h6>" . $row[3] . "</h> </td>";
        echo "<td class='text-center'> <img src='uploads/" . $row[1] . "' height='75px' width='125px'></td>";

        echo "</tr>";
    }

?>
