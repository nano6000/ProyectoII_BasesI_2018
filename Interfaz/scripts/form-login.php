<?php

    session_start();

    if (isset($_POST['submit']))
    {
        include_once('conexion.inc');

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = $_POST["username-input"];
            $passwd = $_POST["passwd-input"];

            $result = 0;

            $stmt = $conn->query("select `verContrasena`('$username');");
            $row = $stmt->fetch(PDO::FETCH_NUM);

            $result = $stmt->rowCount();

            if ($result<1)
                header("Location: ../login.php?login=error&username=$username");
            else
            {
                if (password_verify($passwd, $row[0]))
                {
                    $stmt = $conn->query("select `tipoUsuario`('$username');");
                    $row = $stmt->fetch(PDO::FETCH_NUM);

                    $_SESSION['tipo'] = $row[0];
                    $_SESSION['username'] = $username;

                    $stmt->closeCursor();

                    if ($_SESSION['tipo'] == 3)
                    {
                        $stmt = $conn->query("select `buscarIdComercio`('$username');");
                        $row = $stmt->fetch(PDO::FETCH_NUM);

                        $_SESSION['comercio'] = $row[0];
                    }

                    header("Location: ../homeUser.php?login=success");
                }
                else
                    header("Location: ../login.php?login=error&username=$username");
            }

        }
    }
?>
