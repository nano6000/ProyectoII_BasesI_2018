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
            $cedula = $_POST["id-input"];
            $fechNac = date("Y-m-d G:i:s", strtotime($_POST["date-input"]));
            $usuario = $_POST["username-input"];
            $passwd = $_POST["passwd-input"];
            $passwd = password_hash($passwd, PASSWORD_DEFAULT);

            $stmt = $conn->query("call insertarUsuario('$cedula', '$pNombre', '$pApellido', '$sApellido', '$fechNac',
                                        $distrito, $nacionalidad, '$usuario', '$passwd', 1, $pTel, '$pEmail')");

            if (!$stmt)
            {
                echo "\nPDO::errorInfo():\n";
                print_r($dbh->errorInfo());
            }
            else
            {
                $stmt = $conn->query("select `tipoUsuario`('$usuario');");
                $row = $stmt->fetch(PDO::FETCH_NUM);

                $_SESSION['tipo'] = $row[0];
                $_SESSION['username'] = $usuario;
                header("Location: ../homeUser.php?signupsuccess");
            }

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
