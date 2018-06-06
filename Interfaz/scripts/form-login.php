<?php

    session_start();

    if (isset($_POST['submit']))
    {
        include_once('conexion.inc');

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = $_POST["username-input"];
            $passwd = $_POST["passwd-input"];
            // $passwd = password_hash($passwd, PASSWORD_DEFAULT);

            $result = 0;

            $stmt = $conn->query("select `checkPassword`('$username', '$passwd');");
            $row = $stmt->fetch(PDO::FETCH_NUM);

            $result = $row[0];

            if (!$result)
                header("Location: ../login.php?login=error&username=$username");

            $stmt = $conn->query("select `tipoUsuario`('$username');");
            $row = $stmt->fetch(PDO::FETCH_NUM);

            $_SESSION['tipo'] = $row[0];

            header("Location: ../homeUser.php?login=success");

        }
    }
?>
