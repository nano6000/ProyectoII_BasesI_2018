<?php

    include_once 'scripts/conexion.inc';
    $username = $_SESSION['username'];
    $comercio = $_SESSION['comercio'];

    $stmt = $conn->query("CALL `obtenerComercio`('$username');");
    while($row = $stmt->fetch(PDO::FETCH_NUM))
    {

        echo "<tr>";
        echo "<form id='form" . $comercio . "' class='needs-validation' method='post' action='scripts/updateComercio.php?edit=" . $comercio . "'>";
        echo "<td> <input name='nombre' size='30' type='text' value='". $row[1] . "' required> </td>";
        echo "<td> <input name='contacto' size='30' type='text' value='". $row[2] . "' required> </td>";
        echo "<td> <input name='descripcion' size='30' type='text' value='". $row[3] . "' required> </td>";

        echo "<td> <select name='tipo' class='custom-select' required>'";
            $temp;
            $sql = $conn->query("call obtenerTipoComercio();");
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

        echo "<td> <button id='btnSignIn'form='form" . $comercio . "' type='submit' name='submit'>
            Editar
        </button>";

        echo "</form>";

        echo "</tr>";
    }

?>
