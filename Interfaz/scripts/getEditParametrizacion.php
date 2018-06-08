'<?php

    include_once 'scripts/conexion.inc';

    $stmt = $conn->query("call obtenerEquivalenciaMaterial()");
    while($row = $stmt->fetch(PDO::FETCH_NUM))
    {

        echo "<tr>";
        echo "<form id='form" . $row[0] . "' class='needs-validation' method='post' action='scripts/updateParametrizacion.php?edit=" . $row[0] . "' enctype='multipart/form-data'>";
        echo "<td> <input name='material' size='30' type='text' value='". $row[1] . "' class=\"form-control\"  required> </td>";
        echo "<td> <input name='peso' size='30' type='text' value='". $row[2] . "' class=\"form-control\"  required> </td>";
        echo "<td> <input name='puntaje' size='30' type='text' value='". $row[3] . "' class=\"form-control\"  required> </td>";

        echo "<td> <button id='btnSignIn'form='form" . $row[0] . "' type='submit' name='submit'>
            Editar
        </button> </td>";

        echo "</form>";

        echo "</tr>";
    }

?>
