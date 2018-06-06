<?php
    session_start();

    if (isset($_GET['edit']))
    {
        $id = $_GET['edit'];
        include_once('conexion.inc');

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = $_SESSION['username'];
            $nombre = $_POST["nombre"];
            $contacto = $_POST["contacto"];
            $descripcion = $_POST["descripcion"];
            $tipo = $_POST["tipo"];

            $stmt = $conn->query("update comercio
                            set `nombreComercio` = '$nombre', `contacto` = '$contacto', `descripcion` = '$descripcion', `TipoComercio_idTipoComercio` = $tipo
                            where `comercio`.idComercio	= '$id';");

            header("Location: ../editComercio.php");
        }
    }

?>
