<?php

    include_once 'scripts/conexion.inc';
    $username = $_SESSION['username'];

    $stmt = $conn->query("select c.`idComercio`,
                                c.`nombreComercio`,
                                c.`contacto`,
                                c.`descripcion`,
                                c.`TipoComercio_idTipoComercio`
                            from `comercio` c
                            where  c.`Usuario_nombreUsuario`='$username'");
    while($row = $stmt->fetch(PDO::FETCH_NUM))
    {

        echo "<tr>";
        echo "<form id='form" . $row[0] . "' class='needs-validation' method='post' action='scripts/updateComercio.php?edit=" . $row[0] . "'>";
        echo "<td class='text-center'> <input class='text-center' name='idComercio' size='3' type='text' value='". $row[0] . "' disabled> </td>";
        echo "<td> <input name='nombre' size='30' type='text' value='". $row[1] . "' required> </td>";
        echo "<td> <input name='contacto' size='30' type='text' value='". $row[2] . "' required> </td>";
        echo "<td> <input name='descripcion' size='30' type='text' value='". $row[3] . "' required> </td>";

        echo "<td> <select name='tipo' class='custom-select' required>'";
            $temp;
            $sql = $conn->query("select `idTipoComercio`, `nombre` from `tipocomercio`");
            while ($tipo = $sql->fetch(PDO::FETCH_NUM))
            {
                if ($tipo[0] == $row[4])
                {
                    echo "<option value='" . $tipo[0] . "' selected>" . $tipo[1] . " (" . $tipo[0] . ")" . "</option>";
                    $temp = $tipo[1];
                }
                else
                    echo "<option value='" . $tipo[0] . "'>" . $tipo[1] . " (" . $tipo[0] . ")" . "</option>";
            }
        echo "</select> </td>";

        echo "<td> <button id='btnSignIn'form='form" . $row[0] . "' type='submit' name='submit'>
            Editar
        </button>";

        echo "</form>";

        echo "</tr>";
    }

?>
