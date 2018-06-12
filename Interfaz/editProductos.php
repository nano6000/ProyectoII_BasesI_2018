<?php
    include_once 'header.php';


    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 3)
        header("Location: homeUser.php");

    include_once 'scripts/conexion.inc';
?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>

    <?php
        echo "<div class='panel panel-default'>";
        echo "<div style='margin: 4% 0 0 0' class='panel-heading'>";

        // echo "Lista de Usuarios";
        echo "</div>";
        echo "<div class='panel-body' style='margin: 0 2% 0 2%'>";
        echo "<div class='table-responsive'>";

        echo "<table width='100%' class='table table-fixed table-bordered table-hover table-condensed table-hover' id='data' style='font-size: 11px;'>";
        echo "<thead style='background-color: #f8f8f8;'>";
        echo '<tr>';
        echo '<th> <h6>Nombre</th>';
        echo '<th> <h6>Precio</th>';
        echo '<th> <h6>Foto</th>';
        echo '<th> <h6>Cargar foto</th>';
        echo '<th> <h6>Editar</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        include_once 'scripts/getEditProducto.php';

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      ?>

    <script>
 $(document).ready(function(){
      $('#data').DataTable( {ordering: false} );
 });
</script>



<?php
    include_once 'footer.php';
?>
