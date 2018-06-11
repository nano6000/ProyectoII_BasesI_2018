<?php
	include_once('scripts/conexion.inc');
    include_once('header.php');
?>

	<div class="row justify-content-center" style="margin: 2% 0 0 0">
		<form id="myform" method="post" class="needs-validation col-lg-6 col-md-6 col-sm-6 col-6" novalidate action="scripts/insertProducto.php" enctype='multipart/form-data'>
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
						Campo requerido.
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
						Campo requerido.
					</div>
				</div>
			</div>
			<div class="form-row">
				<label>Imagen: </label>
				<div class="custom-file">
					<input type='file' name='foto'>
					<!-- <label class="custom-file-label" for="foto">Seleccione una imagen</label> -->
				</div>
			</div>

			<?php
				echo '<div class="form row justify-content-center" style="margin: 3% 0 2% 0">';

				if (isset($_GET['insertsuccess']))
				{
					echo '<div class="alert alert-success" role="alert">';
					echo 'Producto agregado correctamente.';
				}
				elseif (isset($_GET['error']))
				{
					$error = isset($_GET['error']);
					echo '<div class="alert alert-danger" role="alert">';
					if ($error = 'noimage')
						echo 'Debe insertar una imagen';
					else
						echo 'Error al insertar el producto.';
				}

				echo '</div>';
				echo '</div>';
			?>
			<div class="form row justify-content-center" style="margin: 2%">
				<button id="btnAgregar" class="btn my-2 my-sm-0 btn-dark" style="margin: 0 1%" form="myform" type="submit" name="submit">
					Agregar
				</button>
				<button class="btn my-2 my-sm-0 btn-dark" style="margin: 0 1%" type="button" onclick="location.href='home.php'">Cancelar</button>
			</div>
		</form>
	</div>

	<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<?php include_once 'footer.php'; ?>
