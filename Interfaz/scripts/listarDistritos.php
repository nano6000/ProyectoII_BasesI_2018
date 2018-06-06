<?php
    include_once 'conexion.inc';

    $canton = $_GET['canton'];

    $stmt = $conn->query("call obtenerDistrito($canton);");

    while($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
    }
    $stmt->closeCursor();
?>
