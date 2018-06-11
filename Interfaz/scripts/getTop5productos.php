<?php

    include_once 'scripts/conexion.inc';

    $comercio = $_SESSION['comercio'];

    $stmt = $conn->query("call `top5productos`($comercio)");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td> <h6>" . $row[0] . "</h> </td>";
        echo "<td> <h6>" . $row[1] . "</h> </td>";

        echo "</tr>";
    }

?>
