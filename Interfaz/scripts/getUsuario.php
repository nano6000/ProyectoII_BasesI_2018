<?php

    include_once 'scripts/conexion.inc';
    $usuario = $_SESSION['username'];

    $stmt = $conn->query("select * from usuarios");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[5] . "</td>";
        echo "<td>" . $row[4] . "</td>";
        echo "<td>" . $row[3] . "</td>";

        echo "</tr>";
    }

?>
