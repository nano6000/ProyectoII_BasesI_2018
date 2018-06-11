<?php

    include_once 'scripts/conexion.inc';
    $centro = $_SESSION['centro'];

    $stmt = $conn->query("call obtenerListadoMateriales('$centro')");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td> <h6>" . $row[0] . "</h> </td>";
        echo "<td> <h6>" . $row[1] . "</h> </td>";
        echo "<td> <h6>" . $row[2] . "</h> </td>";
        echo "<td> <h6>" . $row[3] . "</h> </td>";

        echo "</tr>";
    }

?>
