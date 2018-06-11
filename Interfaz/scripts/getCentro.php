<?php

    include_once 'scripts/conexion.inc';
    $usuario = $_SESSION['username'];

    $stmt = $conn->query("select * from centros");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<tr>";
        echo "<td> <h6>" . $row[0] . "</h> </td>";
        echo "<td> <h6>" . $row[3] . "</h> </td>";
        echo "<td> <h6>" . $row[2] . "</h> </td>";
        echo "<td> <h6>" . $row[4] . "</h> </td>";
        echo "<td> <h6>" . $row[1] . "</h> </td>";

        echo "</tr>";
    }

?>
