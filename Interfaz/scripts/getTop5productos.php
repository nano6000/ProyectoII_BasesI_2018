<?php

    include_once 'scripts/conexion.inc';
    //$sql = "BEGIN :result := pck_consulta.getHuertas(); END;";

    $stmt = $conn->query("select `idProducto`, `nombre`, `precio`, `foto` from `producto`");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td class='text-center'> <img src='uploads/" . $row[3] . "' height='75px' width='125px'></td>";

        echo "</tr>";
    }

?>
