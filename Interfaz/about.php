<!DOCTYPE html>
<html>
	<head>
		<title>Inicio</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	</head>

	<body>

		<header class="sticky-top">
			<nav class="navbar navbar-expand-sm navbar-light bg-primary">
				<a class="navbar-brand" href="home.php">
                    <img src="logo.jpg" alt="logo" height="55" width="60">
					Reciclatico
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="about.php">Acerca de</a>
						</li>
					</ul>
				</div>
				<form class="form-inline">
					<button class="btn my-2 my-sm-0 btn-outline-light" onclick="location.href='login.php'" type="button">Login</button>
				</form>
			</nav>
		</header>

        <div class="row justify-content-center">
            <div class="card col-lg-8 col-10 text-center" style="margin: 2% 0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Reciclatico</b></li>
                    <li class="list-group-item">
                        <p>El consumo de productos con envases ha incrementado considerablemente en las últimas décadas.
La industria y los negocios fomentan el uso de materiales no reciclables o un exceso de recipientes.</p>
                        <p>Por ejemplo, las empresas proveedoras de servicios alimentarios usan materiales no reciclables como el estereofón.
Otras generan un exceso de papel, cartón, plástico, vidrio y lamentablemente no se tiene en el país la cultura de la clasificación de residuos que permita reutilizar materiales reciclables.</p>
                        <p>Los productos que se compran en el supermercado generan gran cantidad de envoltorios, paquetes, bolsas, entre otros que se botan en la basura y van a depositarse en los rellenos sanitarios o en el mar.
Esta contaminación afecta animales terrestres y marinos.</p>
                        <p>Se han visto casos tristes de tortugas deformadas por enredarse en bolsas plásticas, tortugas con pajillas incrustadas en sus narices, ballenas muertas por consumir plásticos tirados al mar, animales ahogados en bolsas plásticas.
Se han encontrado en el mar islas de plástico del tamaño de países continentales.</p>
                        <p>El propósito de este proyecto es estimular en la población costarricense la correcta clasificación de los residuos valorizables de un sistema que premie a los ciudadanos por realizar una correcta clasificación, limpieza y recolección de materiales reutilizables; con el objetivo de disminuir los problemas que causa el excesivo uso de recipientes y su mala gestión.</p>
                    </li>
                </ul>
            </div>
        </div>


 <?php

    include_once 'footer.php';

 ?>
