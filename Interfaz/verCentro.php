<?php
    include_once 'header.php';

    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 2)
        header("Location: homeUser.php");

    include_once 'scripts/conexion.inc';

    $username = $_SESSION['username'];
    $centro = $_SESSION['centro'];

    $stmt = $conn->query("call `obtenerCentroAcopio`($centro);");
    $row = $stmt->fetch(PDO::FETCH_NUM);

    echo "<div class='row justify-content-center'>
        <div class='card col-lg-8 col-10' style='margin: 2% 0'>
            <ul class='list-group list-group-flush'>
                <li class='list-group-item'><h3 class='text-center'><b>Datos de mi centro de acopio</b></h></li>
                <li class='list-group-item'>
                    <div class=''>
                        <h5>Nombre: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>$row[0]</p>
                    </div>

                    <div class=''>
                        <h5 style='margin: 10px 0 0 0'>Contacto: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>$row[1]</p>
                    </div>

                    <div class=''>
                        <h5 style='margin: 10px 0 0 0'>Localizacion: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>$row[2], $row[3]</p>
                    </div>
                </li>
                <li class='list-group-item'>
                    <div id=\"map\" style=\"margin: 5px 0 10px 0 ; width:100%;height:600px;background:gray\"></div>
                </li>
            </ul>
        </div>
    </div>";

    echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>';

?>

    <script>
        function myMap() {
            <?php

            echo 'var coord =[';
            echo str_replace(",", ".", "{lat:" . $row[2] . "");
            echo ", ";
            echo str_replace(",", ".", "lng: " . $row[3] . "}");
            echo '];';
             ?>

            var mapOptions = {
                center: new google.maps.LatLng(coord[0], coord[1]),
                zoom: 18,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            coord.forEach(function(value)
            {
                var marker = new google.maps.Marker(
                {
                    position: value,
                    map: map
                });
            }
        )}
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY9EYO8XqsZKsrXZslRF3IF2M5XDcDYZk&callback=myMap"></script>


<?php


    include_once 'footer.php';

?>
