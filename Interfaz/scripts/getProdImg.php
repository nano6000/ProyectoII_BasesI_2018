<?php

    include_once 'conexion.inc';

    if (session_status() == PHP_SESSION_NONE)
        session_start();

    $producto = $_GET['producto'];

    if (isset($_SESSION['comercio']))
    {
        $comercio = $_SESSION['comercio'];

        $stmt = $conn->query("call obtenerProducto('$comercio')");
    }
    elseif (isset($_SESSION['tipo']) && $_SESSION['tipo'] == 1)
        $stmt = $conn->query("call obtenerProducto(NULL)");

    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        do
            if ($row[0] == $producto)
            {
                echo "<img src='uploads\\$row[1]' style=\"width: 180px; height: 180px;margin: 10px\">";
                break;
            }
        while ($row = $stmt->fetch(PDO::FETCH_NUM));
    }
?>
