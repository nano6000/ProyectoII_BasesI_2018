<?php
    include_once 'header.php';

    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 2)
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
        echo "</div>";
        echo "<div class='panel-body' style='margin: 0 2% 0 2%'>";
        echo "<div class='table-responsive'>";

        echo "<table border=\"0\" cellspacing=\"5\" cellpadding=\"5\" style=\"margin: 0 0 3% 0\">
        <tbody><tr>
            <td>Cedula:</td>
            <td><input type=\"text\" id=\"ced\" name=\"ced\" class=\"form-control\" ></td>
            <td>Nombre de usuario:</td>
            <td><input type=\"text\" id=\"user\" name=\"user\" class=\"form-control\" ></td>

        </tr>
    </tbody></table>";

        echo "<table width='100%' class='table table-fixed table-bordered table-hover table-condensed table-hover' id='data' style='font-size: 11px;'>";
        echo "<thead style='background-color: #f8f8f8;'>";
        echo '<tr>';
        echo '<th> <h6>Cedula</th>';
        echo '<th> <h6>Nombre</th>';
        echo '<th> <h6>Nombre de usuario</th>';
        echo '<th> <h6>Puntos obtenidos</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        include_once 'scripts/getUsuariosCentro.php';

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      ?>


    <script>
        $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var ced = String( $('#ced').val() ).toUpperCase();
        var user = String( $('#user').val() ).toUpperCase();
        var userValue = String( data[2] ).toUpperCase();
        var cedValue = String( data[0] ).toUpperCase();

        if ( cedValue.search(ced)>=0 && userValue.search(user)>=0 )
        {
            return true;
        }
        return false;
    }
);

        $(document).ready(function(){
          var table = $('#data').DataTable( );

        $('#ced, #user').keyup( function() {
        table.draw();
    } );

} );
    </script>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> -->
<?php
include_once 'footer.php';

?>
