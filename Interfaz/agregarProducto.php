<?php
	include_once('scripts/conexion.inc');
    include_once('header.php');
?>

	<div class="row justify-content-center" style="margin: 2% 0 0 0">
		<form id="myform" method="post" class="needs-validation col-lg-6 col-md-6 col-sm-6 col-6" novalidate="" action="scripts/insertProducto.php" enctype='multipart/form-data'>
			<div class="form-row">
				<label> Nombre del producto:</label>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<?php
						if (isset($_GET['Nombre']))
						{
							$Nombre = $_GET['Nombre'];
							echo '<input name="name-input" type="text" class="form-control" placeholder="Nombre" value="'.$Nombre.'" required>';
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
				<label> Precio del producto:</label>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<?php
						if (isset($_GET['precio']))
						{
							$precio = $_GET['precio'];
							echo '<input name="precio-input" type="text" class="form-control" placeholder="Precio" value="'.$precio.'" required>';
						}
						else
						{
							echo '<input name="precio-input" type="text" class="form-control" placeholder="Precio" required>';
						}
					?>
					<div class="invalid-feedback">
						Por favor, ingrese información válida.
					</div>
				</div>
			</div>
			<div class="form-row">
				<label>Imagen: </label>
				<div class="custom-file">
					<input type='file' name='foto' required>
					<div class="invalid-feedback">
						Por favor, ingrese una imagen.
					</div>
					<!-- <label class="custom-file-label" for="foto">Seleccione una imagen</label> -->
				</div>
			</div>

			<?php
				if (isset($_GET['insertsuccess']))
				{
					echo '<div class="form row justify-content-center" style="margin: 5% 0 -5% 0">';
					echo '<div class="alert alert-success" role="alert">';

					echo 'Producto agregado correctamente.';

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
