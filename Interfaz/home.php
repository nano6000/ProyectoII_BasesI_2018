<!--

	Costa Rica Recicla -> nombre de la app

-->
<?php
 	session_start();

	if (isset($_SESSION['username']))
		header("Location: homeUser.php");
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
				<a class="navbar-brand" href="home.php">
					Costa Rica Recicla
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Acerca de</a>
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
					<li class="list-group-item"><b>Centros de Acopio</b></li>
					<li class="list-group-item">
						<div id="map" style="margin: 5px 0 10px 0 ; width:100%;height:600px;background:gray"></div>
					</li>
				</ul>
			</div>
		</div>

		<script>
			function myMap() {
				var mapOptions = {
				    center: new google.maps.LatLng(9.94, -84.08),
				    zoom: 11,
				    mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                <?php
                include_once 'scripts/conexion.inc';

                $stmt = $conn->query("CALL `obtenerLocalizacion`();");
                $row = $stmt->fetch(PDO::FETCH_NUM);

                echo 'var coord =[';
                echo str_replace(",", ".", "{lat:" . $row[0] . "");
                echo ", ";
                echo str_replace(",", ".", "lng: " . $row[1] . "}");
                while($row = $stmt->fetch(PDO::FETCH_NUM))
                {
                    echo ", ";
                    echo str_replace(",", ".", "{lat:" . $row[0] . "");
                    echo ", ";
                    echo str_replace(",", ".", "lng: " . $row[1] . "}");
                }
                echo '];';
                 ?>
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
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	</body>
</html>
