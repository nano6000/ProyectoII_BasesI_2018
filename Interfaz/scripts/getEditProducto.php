'<?php

    include_once 'scripts/conexion.inc';
    $comercio = $_SESSION['comercio'];

    $stmt = $conn->query("call obtenerProducto('$comercio')");
    while($row = $stmt->fetch(PDO::FETCH_NUM))
    {

        echo "<tr>";
        echo "<form id='form" . $row[0] . "' class='needs-validation' method='post' action='scripts/updateProducto.php?edit=" . $row[0] . "' enctype='multipart/form-data'>";
        echo "<td> <input name='nombre' size='30' type='text' value='". $row[2] . "' class=\"form-control\"  required> </td>";
        echo "<td> <input name='precio' size='30' type='text' value='". $row[3] . "' class=\"form-control\"  required> </td>";
        echo "<td class='text-center'> <img src='uploads/" . $row[1] . "' height='75px' width='125px'></td>";
        echo "<td> <input type='file' name='foto'> </td>";

        echo "<td> <button id='btnSignIn'form='form" . $row[0] . "' type='submit' name='submit'>
            Editar
        </button> </td>";

        echo "</form>";

        echo "</tr>";
    }

?>
