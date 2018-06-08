<?php

    include_once 'scripts/conexion.inc';

    $comercio = $_SESSION['comercio'];

    $stmt = $conn->query("call `top5productos`($comercio)");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";

        echo "</tr>";
    }

?>
