<?php

    if (isset($_POST['submit'])
    {
        $file = $_FILES['foto'];

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
                if ($fileSize > 500000)
                {
                    $fileNameNew = 'profilephoto' . $username . "." . $fileActualExt;
                    $fileDestination = '../uploads/' . $fileNameNew;
                    move_uploaded_file($fileTmp, $fileDestination);
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

?>
