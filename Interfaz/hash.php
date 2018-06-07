<?php

    $server = "localhost";
    $usuario   = "root";
    $contra    = "";
    $basedatos= "banderaAzul";

	//proceso para conectar con el servidor

    try
    {
        $conn = new PDO("mysql:host=$server;dbname=$basedatos", $usuario, $contra);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

    $stmt = $conn->query("select nombreUsuario, contrasena from usuario");

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        $passwd = password_hash($row[1], PASSWORD_DEFAULT);
        $usuario = $row[0];
        $update = $conn->query("update usuario set contrasena = '$passwd' where nombreUsuario = '$usuario'
                        and nombreUsuario <> 'super' and nombreUsuario <> 'fcastro' and nombreUsuario <> 'nano4697'");
    }

 ?>
