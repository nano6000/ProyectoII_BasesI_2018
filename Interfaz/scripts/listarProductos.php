<?php
    include_once 'conexion.inc';

    if (isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];

        $stmt = $conn->query("call obtenerProducto('$username');");

        while($row = $stmt->fetch(PDO::FETCH_NUM))
        {
            echo "<option value='" . $row[0] . "'>" . $row[2] . "</option>";
        }
        $stmt->closeCursor();
    }

 ?>
