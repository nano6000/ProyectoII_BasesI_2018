<?php
    include_once 'header.php';

    include_once 'scripts/conexion.inc';

    $username = $_SESSION['username'];

    $stmt = $conn->query("CALL `verPersona`('$username');");
    $row = $stmt->fetch(PDO::FETCH_NUM);
    echo "<div class='row justify-content-center'>
        <div class='card col-lg-8 col-10' style='margin: 5% 0'>
            <ul class='list-group list-group-flush'>
                <li class='list-group-item'><h3 class='text-center'><b>Datos personales</b></h></li>
                <li class='list-group-item'>
                    <div class=''>
                        <h5>Nombre: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>$row[1] $row[2] $row[3]</p>
                    </div>

                    <div class=''>
                        <h5 style='margin: 10px 0 0 0'>Cedula: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>$row[0]</p>
                    </div>

                    <div class=''>
                        <h5 style='margin: 10px 0 0 0'>Correo: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>$row[5]</p>
                    </div>

                    <div class=''>
                        <h5 style='margin: 10px 0 0 0'>Telefono: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>$row[4]</p>
                    </div>

                    <div class=''>
                        <h5 style='margin: 10px 0 0 0'>Fecha de nacimiento: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>$row[6]</p>
                    </div>

                    <div class=''>
                        <h5 style='margin: 10px 0 0 0'>Direccion: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>$row[8], $row[9], $row[7]</p>
                    </div>

                    <div class=''>
                        <h5 style='margin: 10px 0 0 0'>Nacionalidad: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>$row[10]</p>
                    </div>
                </li>
                <li class='list-group-item'>
                    <div class=''>
                        <h5 style='margin: 10px 0 0 0'>Puntos disponibles: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'> $row[11]</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>";

    echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>';

    include_once 'footer.php';

?>
