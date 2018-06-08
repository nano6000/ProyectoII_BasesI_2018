<?php

    session_start();

    if (isset($_POST['submit']))
    {

        include_once('conexion.inc');

        // define variables and set to empty values
        $pNombre = $pApellido = $sApellido = $email = "";
        $tel = $pais = $cedula = $fechNac = $usuario = $passwd = $img = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $pNombre = $_POST["name-input"];
            $pApellido = $_POST["frstLstName-input"];
            $sApellido = $_POST["secndLstName-input"];
            $pEmail = $_POST["email-input"];
            $pTel = $_POST["tel-input"];
            $nacionalidad = $_POST["citizenship"];
            $pais = $_POST["pais"];
            $provincia = $_POST["provincia"];
            $canton = $_POST["canton"];
            $distrito = $_POST["distrito"];
            $cedula = $_GET["id"];
            $usuario = $_SESSION["username"];
            $passwd = $_POST["passwd-input"];

            if ($passwd != "")
            {
                $passwd = password_hash($passwd, PASSWORD_DEFAULT);
                $conn->exec("call cambiarClave('$usuario', '$passwd')");
            }

            $stmt = $conn->exec("call updatePersona('$cedula', '$pNombre', '$pApellido', '$sApellido',
                                        $distrito, $nacionalidad)");

            $stmt = $conn->exec("call updateCorreo('$cedula', '$pEmail')");

            $stmt = $conn->exec("call updateTelefono('$cedula', '$pTel')");
            //
            // if (!$stmt)
            // {
            //     echo "\nPDO::errorInfo():\n";
            //     print_r($dbh->errorInfo());
            // }
            // else
            // {
            //     $stmt = $conn->query("select `tipoUsuario`('$usuario');");
            //     $row = $stmt->fetch(PDO::FETCH_NUM);
            //
            //     $_SESSION['tipo'] = $row[0];
            //     $_SESSION['username'] = $usuario;
                header("Location: ../homeUser.php?updatesuccess");
            // }

        }
    }
    else
        header("HTTP/1.1 403 Forbidden" );

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
