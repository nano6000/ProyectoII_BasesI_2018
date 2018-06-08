<?php
    include_once 'header.php';

    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 3)
        header("Location: homeUser.php");

    include_once 'scripts/conexion.inc';

    $username = $_SESSION['username'];

    $stmt = $conn->query("CALL `obtenerComercio`('$username');");
    $row = $stmt->fetch(PDO::FETCH_NUM);
    echo "<div class='row justify-content-center'>
        <div class='card col-lg-8 col-10' style='margin: 5% 0'>
            <ul class='list-group list-group-flush'>
                <li class='list-group-item'><h3 class='text-center'><b>Datos de mi comercio</b></h></li>
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
                        <h5 style='margin: 10px 0 0 0'>Descripcion: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>$row[2]</p>
                    </div>

                    <div class=''>
                        <h5 style='margin: 10px 0 0 0'>Tipo de comercio: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>$row[4]</p>
                    </div>
                </li>
                <li class='list-group-item'>
                    <div class=''>
                        <h5 style='margin: 10px 0 0 0'>Total de puntos canjeados: </h5>
                    </div>

                    <div class=''>
                        <p style='margin: 2% 0 0 7%'>";

    $stmt->closeCursor();

    $comercio = $_SESSION['comercio'];

    $stmt = $conn->query("CALL `totalPuntosComercio`($comercio);");
    $row = $stmt->fetch(PDO::FETCH_NUM);

    echo $row[0];
    echo "              </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>";

    echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>';

    include_once 'footer.php';

?>
