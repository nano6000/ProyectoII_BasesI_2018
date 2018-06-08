<?php

    include_once 'scripts/conexion.inc';

    $stmt = $conn->query("call obtenerEquivalenciaMaterial()");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";

        echo "</tr>";
    }

?>
