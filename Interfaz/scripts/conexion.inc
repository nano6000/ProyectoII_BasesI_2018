<?php
    //parametros de conexion (opcionales)
    $server = "localhost";
    $usuario   = "root";
    $contra    = "";
    $basedatos= "prueba";

	//proceso para conectar con el servidor

    try
    {
        $conn = new PDO("mysql:host=$server;dbname=$basedatos", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

?>
