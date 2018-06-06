<?php
    session_start();

    if (isset($_GET['edit']))
    {
        include_once('conexion.inc');

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = $_SESSION['username'];
            $nombre = $_POST["nombre"];
            $contacto = $_POST["contacto"];
            $descripcion = $_POST["descripcion"];
            $tipo = $_POST["tipo"];

            $username = $_SESSION['username'];

            $stmt = $conn->query("update comercio
                            set `nombreComercio` = '$nombre', `contacto` = '$contacto', `descripcion` = '$descripcion', `TipoComercio_idTipoComercio` = $tipo
                            where `comercio`.Usuario_nombreUsuario	= '$username';");

            header("Location: ../editComercio.php");
        }
    }

?>
