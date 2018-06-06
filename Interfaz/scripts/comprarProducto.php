<?php
    include_once 'conexion.inc';

    if (isset($_POST['submit']))
    {
        $username = $_POST['name-input'];
        $producto = $_POST['producto'];

        $stmt = $conn->query("select puedeCanjear($producto, '$username', 0);");

        $row = $stmt->fetch(PDO::FETCH_NUM);

        $result = $row[0];

        if (!$result)
        {
            header("Location: ../canjearPuntos.php?error=notEnoughPoints");
        }
        else
        {
            header("Location: ../canjearPuntos.php?success");
        }
    }

 ?>
