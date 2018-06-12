<?php
    session_start();

    if (isset($_POST['submit']))
    {
        include_once('conexion.inc');

        $usuario = $_SESSION['username'];

        $material = $_POST["material"];
        $peso = $_POST["peso"];
        $puntaje = $_POST["puntaje"];


        try
        {
            $stmt = $conn->query("call insertarEquivalenciaMaterial($peso, $puntaje, '$material');");
            if (!$stmt)
            {
                header("Location: ../darPuntos.php?error&peso=$peso&material=$material&puntaje=$puntaje)");
            }
            else
            // echo $producto;
            header("Location: ../agregarParametrizacion.php?success");
        }
        catch (\Exception $e)
        {
            header("Location: ../darPuntos.php?error=$error&peso=$peso&material=$material&puntaje=$puntaje");

        }

    }
    else
        header("HTTP/1.1 403 Forbidden" );
?>
