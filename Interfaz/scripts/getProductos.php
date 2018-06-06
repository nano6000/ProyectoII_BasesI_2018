<?php

    include_once 'scripts/conexion.inc';
    //$sql = "BEGIN :result := pck_consulta.getHuertas(); END;";

    $stmt = $conn->query("select `idProducto`, `nombre`, `precio`, `foto`, `Comercio_idComercio` from `producto`");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td> <img src='" . $row[3] . "' height='50' width='42'></td>";

        echo "</tr>";
    }

?>
