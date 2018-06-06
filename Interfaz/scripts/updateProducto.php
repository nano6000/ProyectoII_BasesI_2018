<?php
    session_start();

    if (isset($_GET['edit']))
    {
        $id = $_GET['edit'];
        include_once('conexion.inc');

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = $_SESSION['username'];
            $nombre = $_POST["nombre"];
            $precio = $_POST["precio"];
            $file = $_FILES['foto'];


            if ($file['name'])
            {
                $fileName = $file['name'];
                $fileTmp = $file['tmp_name'];
                $fileSize = $file['size'];
                $fileError = $file['error'];

                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));

                $allowed = array('jpg', 'jpeg', 'png');

                if (in_array($fileActualExt, $allowed))
                {
                    if ($fileError === 0)
                    {
                        if ($fileSize < 5000000)
                        {
                            $fileNameNew = 'producto' . $id . "." . $fileActualExt;
                            $fileDestination = '../uploads/' . $fileNameNew;
                            move_uploaded_file($fileTmp, $fileDestination);

                            $stmt = $conn->query("update producto
                                        set `nombre` = '$nombre', `precio` = '$precio', `foto` = '$fileNameNew'
                                        where `producto`.idProducto	= '$id';");
                            header("Location: home.php?signupsuccess");
                        }
                        else
                            echo "Your file is too big!";

                    }
                    else
                        echo "There was an error uploading your file!";

                }
                else
                    echo "You cannot upload files of this type!";
            }
            else
            {
                $stmt = $conn->query("update producto
                            set `nombre` = '$nombre', `precio` = '$precio'
                            where `producto`.idProducto	= '$id';");
                header("Location: ../editProductos.php?updateSuccess");
            }

            header("Location: ../editProductos.php?updatefailed");
        }
    }

?>
