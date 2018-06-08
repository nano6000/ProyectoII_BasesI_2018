<?php
    session_start();

    if (isset($_POST['submit']))
    {
        $id = $_GET['edit'];
        include_once('conexion.inc');

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $material = $_POST["material"];
            $peso = $_POST["peso"];
            $puntaje = $_POST["puntaje"];

            try
            {
                $stmt = $conn->exec("call editarEquivalenciaMaterial($peso, $material, '$puntaje');");
                if (!$stmt)
                {
                    header("Location: ../editParametrizacion.php?error&peso=$peso&material=$material&puntaje=$puntaje)");
                }
                else
                // echo $producto;
                header("Location: ../editParametrizacion.php?success");
            }
            catch (\Exception $e)
            {
                $error = $conn->errorCode();
                header("Location: ../editParametrizacion.php?error=$error&peso=$peso&material=$material&puntaje=$puntaje");

            }
        }
    }

?>
