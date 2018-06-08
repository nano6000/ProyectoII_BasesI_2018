<!--

	Reciclatico -> nombre de la app

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
                <img src="logo.jpg" alt="logo" height="55" width="60">
				Reciclatico
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
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-outline-dark dropdown-toggle"  style="margin: 0 8px 0 0" id="dropdownEstadisticas" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Estadisticas
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownHuerta">
                                            <a class="dropdown-item" href="estadisticasUsuario.php">Usuarios</a>
                                            <a class="dropdown-item" href="estadisticasTipoComercio.php">Comercios</a>
                                            <a class="dropdown-item" href="estadisticasProducto.php">Productos</a>
                                            <a class="dropdown-item" href="estadisticasTop5.php">Top 5</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-outline-dark dropdown-toggle"  style="margin: 0 8px 0 0"  id="dropdownEstadisticas" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Consultas
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownHuerta">
                                            <a class="dropdown-item" href="verUsuarioTotal.php">Ver usuarios</a>
                                            <a class="dropdown-item" href="verComercioTotal.php">Ver comercios</a>
                                            <a class="dropdown-item" href="#">Cambios de clave</a>
                                            <a class="dropdown-item" href="verProductosMasCanjeados.php">Productos con mayor solicitud</a>
                                            <a class="dropdown-item" href="verPuntosUsuarios.php">Puntaje de usuarios</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-outline-dark dropdown-toggle"  style="margin: 0 8px 0 0"  id="dropdownParametrizacion" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Parametrizacion
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownHuerta">
                                            <a class="dropdown-item" href="verParametrizacion.php">Ver parametrizacion</a>
                                            <a class="dropdown-item" href="agregarParametrizacion.php">Agregar parametrizacion</a>
                                            <a class="dropdown-item" href="editParametrizacion.php">Editar parametrizacion</a>
                                        </div>
                                    </div>';
                                    break;
                                case 3: //Encargado comercio
                                    echo "<div class='dropdown'>
                                            <button type='button' class='btn btn-outline-dark dropdown-toggle'  style='margin: 0 8px 0 0' id='dropdownComercio' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                                                    Mi comercio
                                            </button>
                                            <div class='dropdown-menu' aria-labelledby='dropdownComercio'>
                                                <a class='dropdown-item' href='verComercio.php'>Ver comercio</a>
                                                <a class='dropdown-item' href='editComercio.php'>Editar comercio</a>
                                            </div>
                                        </div>
                                        <a> </a>
                                        <div class='dropdown'>
                                                <button type='button' class='btn btn-outline-dark dropdown-toggle' style='margin: 0 8px 0 0' id='dropdownProducto' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                                                        Mis productos
                                                </button>
                                                <div class='dropdown-menu' aria-labelledby='dropdownProducto'>
                                                    <a class='dropdown-item' href='verProductos.php'>Ver productos</a>
                                                    <a class='dropdown-item' href='agregarProducto.php'>Agregar productos</a>
                                                    <a class='dropdown-item' href='editProductos.php'>Editar productos</a>
                                                </div>
                                            </div>
                                        <li class='nav-item'>
                                            <button type='button' class='btn btn-outline-dark' style='margin: 0 8px 0 0 ' id='top5Canjeos' role='button'  onclick='location.href=\"top5productos.php\"'>
                                                Top 5 de productos
                                            </button>
                                        </li>
                                        <li class='nav-item'>
                                            <button type='button' class='btn btn-outline-dark' style='margin: 0 8px 0 0 ' id='canjearPuntos' role='button' onclick='location.href=\"canjearPuntos.php\"'>
                                                Canjear puntos
                                            </button>
                                        </li>";
                                    break;
                                case 2: //Administrador centro
                                    echo "<div class='dropdown'>
                                            <button type='button' class='btn btn-outline-dark dropdown-toggle'  style='margin: 0 8px 0 0' id='dropdownCentro' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                                                    Mi centro de acopio
                                            </button>
                                            <div class='dropdown-menu' aria-labelledby='dropdownCentro'>
                                                <a class='dropdown-item' href='verCentro.php'>Ver centro de acopio</a>
                                                <a class='dropdown-item' href='editCentro.php'>Editar centro de acopio</a>
                                            </div>
                                        </div>
                                        <a> </a>
                                        <div class='dropdown'>
                                            <button type='button' class='btn btn-outline-dark dropdown-toggle' style=\"margin: 0 8px 0 0\" id='dropdownOtrasConsultas' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                                                    Otras consultas
                                            </button>
                                            <div class='dropdown-menu' aria-labelledby='dropdownHuerta'>
                                                <a class='dropdown-item' href='verMaterialesReciclados.php'>Materiales reciclados</a>
                                                <a class='dropdown-item' href='top5usuarios.php'>Top 5 de usuarios con mayor reciclaje</a>
                                                <a class='dropdown-item' href='verUsuariosCentro.php'>Puntos obtenidos por usuarios</a>
                                            </div>
                                        </div>
                                        <li class='nav-item'>
                                            <button type='button' class='btn btn-outline-dark' style='margin: 0 8px 0 0 ' id='obtenerPuntos' role='button' onclick='location.href=\"obtenerPuntos.php\"' aria-expanded='false'>
                                                Obtener puntos
                                            </button>
                                        </li>";
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
                    <a class="dropdown-item" href="editarPerfil.php">Editar</a>
                    <a class="dropdown-item" href="verPerfil.php">Ver perfil</a>
                    <form action="scripts/logout.php" method="post">
                        <button class="dropdown-item" type="submit" name="submit">Salir</button>
                    </form>
				</div>
			</div>
		</nav>

	</header>
