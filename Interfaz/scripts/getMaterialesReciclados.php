<?php

    include_once 'scripts/conexion.inc';
    $centro = $_SESSION['centro'];

    $stmt = $conn->query("call obtenerListadoMateriales('$centro')");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";

        echo "</tr>";
    }

?>
