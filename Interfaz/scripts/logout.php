<?php
    if (isset($_POST['submit']))
    {
        session_start();

        include_once('conexion.inc');

        $username = $_SESSION["username"];

        session_unset();
        session_destroy();
        header("Location: ../home.php");
    }
?>
