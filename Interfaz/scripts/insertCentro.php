<?php
    if (isset($_POST['submit']))
    {
        include_once('conexion.inc');

        $nombre = $_POST["name-input"];
        $usuario = $_POST["usuario"];
        $distrito = $_POST["distrito"];
        $contacto = $_POST["contacto"];
        $Xcoord = $_POST["Xpos-input"];
        $Ycoord = $_POST["Ypos-input"];

        $stmt = $conn->query("call insertarCentroAcopio('$nombre', '$contacto', '$Xcoord', '$Ycoord',
                        '$distrito', '$usuario');");

        if (!$stmt)
        {
            echo "\nPDO::errorInfo():\n";
            print_r($dbh->errorInfo());
        }
        else
        {
            move_uploaded_file($fileTmp, $fileDestination);
            header("Location: ../crearCentro.php?insertsuccess");
        }

    }
    else
        header("HTTP/1.1 403 Forbidden" );
?>
