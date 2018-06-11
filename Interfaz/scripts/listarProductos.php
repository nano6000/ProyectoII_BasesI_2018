<?php
    include_once 'conexion.inc';

    if (isset($_SESSION['comercio']))
    {
        $comercio = $_SESSION['comercio'];

        $stmt = $conn->query("call obtenerProducto('$comercio');");

        if ($row = $stmt->fetch(PDO::FETCH_NUM))
        {
            $initimg = $row[1];
            do
                echo "<option value='" . $row[0] . "'>" . $row[2] . "</option>";
            while ($row = $stmt->fetch(PDO::FETCH_NUM));
        }
        $stmt->closeCursor();
    }
    elseif (isset($_SESSION['tipo']) && $_SESSION['tipo'] == 1)
    {
        $stmt = $conn->query("call obtenerProducto(NULL);");

        if ($row = $stmt->fetch(PDO::FETCH_NUM))
        {
            $initimg = $row[1];
            do
                echo "<option value='" . $row[0] . "'>" . $row[2] . "</option>";
            while ($row = $stmt->fetch(PDO::FETCH_NUM));
        }
        $stmt->closeCursor();
    }

 ?>
