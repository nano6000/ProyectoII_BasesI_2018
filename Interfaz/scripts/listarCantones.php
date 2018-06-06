<?php
    include_once 'conexion.inc';

    $provincia = $_GET['provincia'];

    $stmt = $conn->query("call obtenerCanton($provincia);");

    while($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
    }
    $stmt->closeCursor();
?>
