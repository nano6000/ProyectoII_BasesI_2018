<?php
    if (isset($_POST['submit']))
    {
        include_once('conexion.inc');

        $nombre = $_POST["name-input"];
        $usuario = $_POST["usuario"];
        $contacto = $_POST["contacto"];
        $descrip = $_POST["descrip-input"];
        $tipo = $_POST["tipoComercio"];

        $stmt = $conn->query("call insertarComercio('$nombre', '$contacto', '$descrip', '$usuario',
                        '$tipo');");

        if (!$stmt)
        {
            echo "\nPDO::errorInfo():\n";
            print_r($dbh->errorInfo());
        }
        else
        {
            move_uploaded_file($fileTmp, $fileDestination);
            header("Location: ../crearComercio.php?insertsuccess");
        }

    }
    else
        header("HTTP/1.1 403 Forbidden" );
?>
