<?php

    include_once 'scripts/conexion.inc';

    $stmt = $conn->query("call obtenerEquivalenciaMaterial()");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td> <h6>" . $row[1] . "</h> </td>";
        echo "<td> <h6>" . $row[2] . "</h> </td>";
        echo "<td> <h6>" . $row[3] . "</h> </td>";

        echo "</tr>";
    }

?>
