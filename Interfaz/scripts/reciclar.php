<?php
    include_once 'conexion.inc';
    session_start();

    if (isset($_POST['submit']))
    {
        $username = $_POST['name-input'];
        $material = $_POST['material'];
        $peso = $_POST['peso'];
        $centro = $_SESSION['centro'];

        try
        {
            $stmt = $conn->exec("call insertarPuntos($material, $peso, '$username', $centro);");
            if (!$stmt)
            {
                $error = $conn->errorCode();
                header("Location: ../obtenerPuntos.php?error=$error)");
            }
            else
            // echo $producto;
            header("Location: ../obtenerPuntos.php?success");
        }
        catch (\Exception $e)
        {
            $error = $conn->errorCode();
            header("Location: ../obtenerPuntos.php?error=$error");

        }

    }

 ?>
