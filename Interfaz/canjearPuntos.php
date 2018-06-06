<?php
	include_once('scripts/conexion.inc');
    include_once('header.php');
?>

	<div class="row justify-content-center" style="margin: 10% 0 0 0">
		<form id="myform" method="post" class="needs-validation col-lg-6 col-md-6 col-sm-6 col-6" novalidate="" action="scripts/comprarProducto.php" enctype='multipart/form-data'>
			<div class="form-row">
				<label> Nombre de usuario:</label>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<?php
						if (isset($_GET['Nombre']))
						{
							$Nombre = $_GET['Nombre'];
							echo '<input name="name-input" type="text" class="form-control" placeholder="Nombre de usuario" value="'.$Nombre.'" required>';
						}
						else
						{
							echo '<input name="name-input" type="text" class="form-control" placeholder="Nombre" required>';
						}
					?>
					<div class="invalid-feedback">
						Por favor, ingrese información válida.
					</div>
				</div>
			</div>
			<div class="form-row">
				<label> Producto por el que se desean canjear los puntos: </label>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
                <select name="producto" class="custom-select" required>
					<?php
						include_once 'scripts/listarProductos.php';
					?>
                </select>
					<div class="invalid-feedback">
						Por favor, ingrese información válida.
					</div>
				</div>
			</div>

			<?php
				if (isset($_GET['error']))
				{
					echo '<div class="form row justify-content-center" style="margin: 2% 0 -2% 0">';
					echo '<div class="alert alert-danger" role="alert">';
					$signUpError = $_GET['error'];

					if ($signUpError == 'notEnoughPoints')
						echo 'El usuario no posee suficientes puntos.';

					echo '</div>';
					echo '</div>';
				}
				elseif (isset($_GET['success']))
				{
					echo '<div class="form row justify-content-center" style="margin: 2% 0 -2% 0">';
					echo '<div class="alert alert-success" role="alert">';
					echo 'Canje exitoso';
					echo '</div>';
					echo '</div>';
				}
			?>
			<div class="form row justify-content-center" style="margin: 5%">
				<button id="btnCanjear" class="btn my-2 my-sm-0 btn-dark" style="margin: 0 1%" form="myform" type="submit" name="submit">
					Canjear
				</button>
				<button class="btn my-2 my-sm-0 btn-dark" style="margin: 0 1%" type="button" onclick="location.href='home.php'">Cancelar</button>
			</div>
		</form>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<?php include_once 'footer.php'; ?>
