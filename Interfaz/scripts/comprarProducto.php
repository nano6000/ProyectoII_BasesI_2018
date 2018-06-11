<?php
    include_once 'conexion.inc';

    if (isset($_POST['submit']))
    {
        $username = $_POST['name-input'];
        $producto = $_POST['producto'];
        $cantidad = $_POST['cant-input'];

        if (intval($cantidad)<0)
            header("Location: ../canjearPuntos.php?error=negativeValue&Nombre=$username&Cantidad=$cantidad");

        $stmt = $conn->query("select obtenerPrecioProducto($producto);");
        $precio = $stmt->fetch(PDO::FETCH_NUM);
        $precio = $precio[0];
        $stmt->closeCursor();

        $total = $precio*intval($cantidad);
        echo $total;

        $stmt = $conn->query("select puedeCanjear($total, '$username', 0);");

        $row = $stmt->fetch(PDO::FETCH_NUM);

        $result = $row[0];

        if (!$result)
            header("Location: ../canjearPuntos.php?error=notEnoughPoints&Nombre=$username&Cantidad=$cantidad");
        else
        {
            $stmt = $conn->query("call insertarCanje($producto, $cantidad, '$username');");
            if (!$stmt)
            {
                echo "\nPDO::errorInfo():\n";
                print_r($dbh->errorInfo());
            }
            else
                header("Location: ../canjearPuntos.php?success");
        }
    }

 ?>
