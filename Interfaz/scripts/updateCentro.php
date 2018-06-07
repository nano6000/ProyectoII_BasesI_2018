<?php
    session_start();

    if (isset($_GET['edit']))
    {
        $id = $_GET['edit'];
        include_once('conexion.inc');

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $nombre = $_POST["nombre"];
            $contacto = $_POST["contacto"];
            $Xcoord = $_POST["Xcoord"];
            $Ycoord = $_POST["Ycoord"];
            $distrito = $_POST["distrito"];
            $tipo = $_POST["tipo"];

            $stmt = $conn->query("call editarComercio($id, '$nombre', $contacto, '$descripcion', $tipo);");

            header("Location: ../editComercio.php");
        }
    }

?>
