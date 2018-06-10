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

            $stmt = $conn->query("call editarCentro($id, '$nombre', $contacto, '$Xcoord', $Ycoord, $distrito);");

            header("Location: ../editCentro.php");
        }
    }

?>
