<?php
    if (isset($_POST['submit']))
    {
        include_once('conexion.inc');

        $nombre = $_POST["name-input"];
        $precio = $_POST["precio-input"];
        $comercio = $_SESSION["comercio"];

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
                        $fileNameNew = 'profilephoto' . $usuario . "." . $fileActualExt;
                        $fileDestination = '../uploads/' . $fileNameNew;

                        $stmt = $conn->query("call insertarProducto('$fileNameNew', '$precio', '$nombre', '$comercio');");

                        if (!$stmt)
                        {
                            echo "\nPDO::errorInfo():\n";
                            print_r($dbh->errorInfo());
                        }
                        else
                        {
                            move_uploaded_file($fileTmp, $fileDestination);
                            header("Location: ../agregarProducto.php?insertsuccess");
                        }


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

    }
    else
        header("HTTP/1.1 403 Forbidden" );
?>
