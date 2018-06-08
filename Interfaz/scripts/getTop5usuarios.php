<?php

    include_once 'scripts/conexion.inc';

    $centro = $_SESSION['centro'];

    $stmt = $conn->query("call `top5usuarios`($centro)");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";

        echo "</tr>";
    }

?>
