<!--

	Costa Rica Recicla -> nombre de la app

-->
<?php
    session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Inicio</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	</head>

<body>
	<header class="sticky-top">
		<nav class="navbar navbar-expand-sm navbar-light bg-primary">
			<a class="navbar-brand" style="margin: 0 4% 0 0" href="homeUser.php">
                <!-- <img src="logo.png" alt="logo" height="50" width="42"> -->
				Costa Rica Recicla
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
                    <?php
                        if (isset($_SESSION['tipo']))
                        {
                            $tipo = $_SESSION['tipo'];
                            switch ($tipo)
                            {
                                case 4: //Super usuario
                                    echo '<li class="nav-item">
              							    <a class="nav-link" href="crearCentro.php">Nuevo centro</a>
                                        </li>
                                        <li class="nav-item">
                  							<a class="nav-link" href="crearComercio.php">Nuevo comercio</a>
                                        </li>
                                        <li class="nav-item">
                  							<a class="nav-link" href="verCentros.php">Ver centros</a>
                                        </li>
                                        <li class="nav-item">
                  							<a class="nav-link" href="verComercios.php">Ver comercios</a>
                                        </li>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-outline-dark dropdown-toggle" id="dropdownEstadisticas" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Estadisticas
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownHuerta">
                                            <a class="dropdown-item" href="#">Usuarios</a>
                                            <a class="dropdown-item" href="#">Comercios</a>
                                            <a class="dropdown-item" href="#">Productos</a>
                                            <a class="dropdown-item" href="#">Top 5</a>
                                        </div>
                                    </div>';
                                    break;
                                case 3: //Encargado comercio
                                    echo '<div class="dropdown">
                                            <button type="button" class="btn btn-outline-dark dropdown-toggle"  style="margin: 0 8px 0 0" id="dropdownComercio" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                    Mi comercio
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownComercio">
                                                <a class="dropdown-item" href="verComercio.php">Ver comercio</a>
                                                <a class="dropdown-item" href="editComercio.php">Editar comercio</a>
                                            </div>
                                        </div>
                                        <a> </a>
                                        <div class="dropdown">
                                                <button type="button" class="btn btn-outline-dark dropdown-toggle" style="margin: 0 8px 0 0" id="dropdownProducto" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                        Mis productos
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownProducto">
                                                    <a class="dropdown-item" href="verProductos.php">Ver productos</a>
                                                    <a class="dropdown-item" href="agregarProducto.php">Agregar productos</a>
                                                    <a class="dropdown-item" href="editProductos.php">Editar productos</a>
                                                </div>
                                            </div>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-outline-dark dropdown-toggle" style="margin: 0 8px 0 0" id="dropdownOtrasConsultas" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                    Otras consultas
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownOtrasConsultas">
                                                <a class="dropdown-item" href="#">Total de puntos canjeados por producto</a>
                                                <a class="dropdown-item" href="#">Top 5 de productos</a>
                                            </div>
                                        </div>
                                        <li class="nav-item">
                                            <button type="button" class="btn btn-outline-dark" style="margin: 0 8px 0 0 " id="canjearPuntos" role="button" aria-expanded="false">
                                                Canjear puntos
                                            </button>
                                        </li>';
                                    break;
                                case 2: //Administrador centro
                                    echo '<div class="dropdown">
                                            <button type="button" class="btn btn-outline-dark dropdown-toggle"  style="margin: 0 8px 0 0" id="dropdownCentro" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                    Mi centro de acopio
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownCentro">
                                                <a class="dropdown-item" href="#">Ver centro de acopio</a>
                                                <a class="dropdown-item" href="#">Editar centro de acopio</a>
                                            </div>
                                        </div>
                                        <a> </a>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-outline-dark dropdown-toggle" id="dropdownOtrasConsultas" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                    Otras consultas
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownHuerta">
                                                <a class="dropdown-item" href="#">Materiales reciclados</a>
                                                <a class="dropdown-item" href="#">Top 5 de usuarios</a>
                                                <a class="dropdown-item" href="#">Puntos obtenidos por usuarios</a>
                                            </div>
                                        </div>
                                        <li class="nav-item">
                                            <button type="button" class="btn btn-outline-dark" style="margin: 0 8px 0 0 " id="obtenerPuntos" role="button" aria-expanded="false">
                                                Obtener puntos
                                            </button>
                                        </li>';
                                    break;
                                case 1:
                                    break;
                                default:
                                    header("HTTP/1.1 501 Not Implemented");
                                    break;
                            }
                        }
                    ?>
				</ul>
			</div>
			<div class="dropdown">
				<button class="btn btn-secundary dropdown-toogle" type="button" id="dropdownUserMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php
					 	if (!isset($_SESSION['username']))
							header("Location: home.php");
						else
							echo $_SESSION['username'];
					?>
				</button>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownUserMenu">
                    <a class="dropdown-item" href="#">Editar</a>
                    <form action="scripts/logout.php" method="post">
                        <button class="dropdown-item" type="submit" name="submit">Salir</button>
                    </form>
				</div>
			</div>
		</nav>

	</header>
