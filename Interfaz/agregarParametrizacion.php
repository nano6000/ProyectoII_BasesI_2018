<?php
	include_once('scripts/conexion.inc');
    include_once('header.php');
?>

	<div class="row justify-content-center" style="margin: 5% 0 0 0">
		<form id="myform" method="post" class="needs-validation col-lg-6 col-md-6 col-sm-6 col-6" novalidate="" action="scripts/insertParametrizacion.php" enctype='multipart/form-data'>
			<div class="form-row">
				<label> Material:</label>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<?php
						if (isset($_GET['Material']))
						{
							$Material = $_GET['Material'];
							echo '<input name="material" type="text" class="form-control" placeholder="Material" value="'.$Material.'" required>';
						}
						else
						{
							echo '<input name="material" type="text" class="form-control" placeholder="Material" required>';
						}
					?>
					<div class="invalid-feedback">
						Por favor, ingrese información válida.
					</div>
				</div>
			</div>
			<div class="form-row">
				<label> Puntaje:</label>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<?php
						if (isset($_GET['puntaje']))
						{
							$puntaje = $_GET['puntaje'];
							echo '<input name="puntaje" type="text" class="form-control" placeholder="Puntaje" value="'.$puntaje.'" required>';
						}
						else
						{
							echo '<input name="puntaje" type="text" class="form-control" placeholder="Puntaje" required>';
						}
					?>
					<div class="invalid-feedback">
						Por favor, ingrese información válida.
					</div>
				</div>
			</div>


			<div class="form-row">
				<label> Peso:</label>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<?php
						if (isset($_GET['peso']))
						{
							$pesoe = $_GET['peso'];
							echo '<input name="peso" type="text" class="form-control" placeholder="Peso" value="'.$peso.'" required>';
						}
						else
						{
							echo '<input name="peso" type="text" class="form-control" placeholder="Peso" required>';
						}
					?>
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

					if ($signUpError == 23000)
						echo 'El usuario no existe.';
					else
					{
						echo 'Error inesperado. Si el problema persiste contacte a soporte tecnico. Codigo de error:';
						echo $signUpError;
					}

					echo '</div>';
					echo '</div>';
				}
				elseif (isset($_GET['success']))
				{
					echo '<div class="form row justify-content-center" style="margin: 2% 0 -2% 0">';
					echo '<div class="alert alert-success" role="alert">';
					echo 'Insercion exitosa';
					echo '</div>';
					echo '</div>';
				}
			?>
			<div class="form row justify-content-center" style="margin: 10%">
				<button id="btnAgregar" class="btn my-2 my-sm-0 btn-dark" style="margin: 0 1%" form="myform" type="submit" name="submit">
					Agregar
				</button>
				<button class="btn my-2 my-sm-0 btn-dark" style="margin: 0 1%" type="button" onclick="location.href='home.php'">Cancelar</button>
			</div>
		</form>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<?php include_once 'footer.php'; ?>
