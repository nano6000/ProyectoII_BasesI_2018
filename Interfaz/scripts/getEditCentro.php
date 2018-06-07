<?php

    include_once 'scripts/conexion.inc';
    $username = $_SESSION['username'];
    $centro = $_SESSION['centro'];

    $stmt = $conn->query("call `obtenerCentroAcopio`($centro);");
    $row = $stmt->fetchAll();
    $stmt->closeCursor();
    foreach($row as $info)
    {

        echo "<tr>";
        echo "<form id='form" . $centro . "' class='needs-validation' method='post' action='scripts/updateComercio.php?edit=" . $centro . "'>";
        echo "<td> <input name='nombre' size='30' type='text' value='". $info[0] . "' required> </td>";
        echo "<td> <input name='contacto' size='20' type='text' value='". $info[1] . "' required> </td>";
        echo "<td> <input name='Xcoord' size='20' type='text' value='". $info[2] . "' required> </td>";
        echo "<td> <input name='Ycoord' size='20' type='text' value='". $info[3] . "' required> </td>";

        echo "<td> <select name='provincia' id='provincia' class='custom-select' required>'";
            $temp;
            $sql = $conn->query("select idProvincia, nombreProvincia from provincia");
            while ($prov = $sql->fetch(PDO::FETCH_NUM))
            {
                if ($prov[1] == $info[6])
                {
                    $temp = $prov[0];
                    echo "<option value='" . $prov[0] . "' selected>" . $prov[1] . "</option>";
                }
                else
                    echo "<option value='" . $prov[0] . "'>" . $prov[1] . "</option>";
            }
        echo "</select> </td>";

        echo "<td> <select name='canton' id='canton' class='custom-select' required>'";
            $temp;
            $sql = $conn->query("select idCanton, nombreCanton from canton where Provincia_idProvincia = $temp");
            while ($cant = $sql->fetch(PDO::FETCH_NUM))
            {
                if ($cant[1] == $info[5])
                {
                    $temp = $cant[0];
                    echo "<option value='" . $cant[0] . "' selected>" . $cant[1] . "</option>";
                }
                else
                    echo "<option value='" . $cant[0] . "'>" . $cant[1] . "</option>";
            }
        echo "</select> </td>";

        echo "<td> <select name='distrito' id='distrito' class='custom-select' required>'";
            $temp;
            $sql = $conn->query("select idDistrito, nombreDistrito from distrito where Canton_idCanton = $temp");
            while ($dist = $sql->fetch(PDO::FETCH_NUM))
            {
                if ($dist[1] == $info[4])
                    echo "<option value='" . $dist[0] . "' selected>" . $dist[1] . "</option>";
                else
                    echo "<option value='" . $dist[0] . "'>" . $dist[1] . "</option>";
            }
        echo "</select> </td>";

        echo "<td> <button id='btnSignIn'form='form" . $centro . "' type='submit' name='submit'>
            Editar
        </button>";

        echo "</form>";

        echo "</tr>";
    }

?>


		<script type="text/javascript">
       $(document).on('change','#provincia',function(){
             var val = $(this).val();
             $.ajax({
                   url: 'scripts/listarCantones.php',
                   data: {provincia:val},
                   type: 'GET',
                   dataType: 'html',
                   success: function(result){
                        $('#canton').html();
                        $('#canton').html(result);
                   }
              });
       });
  </script>

  <script type="text/javascript">
 $(document).on('change','#canton',function(){
	   var val = $(this).val();
	   $.ajax({
			 url: 'scripts/listarDistritos.php',
			 data: {canton:val},
			 type: 'GET',
			 dataType: 'html',
			 success: function(result){
				  $('#distrito').html();
				  $('#distrito').html(result);
			 }
		});
 });
</script>

<?php include_once 'footer.php'; ?>
