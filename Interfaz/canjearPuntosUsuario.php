<?php

	include_once('scripts/conexion.inc');
	include_once('header.php');

	if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 1)
	header("Location: homeUser.php");

	if (session_status() == PHP_SESSION_NONE)
        session_start();

?>

	<script src="https://code.jquery.com/jquery-1.12.4.js" charset="utf-8"></script>

	<div class="row justify-content-center" style="margin: 5% 0 0 0">
		<form id="myform" method="post" class="needs-validation col-lg-6 col-md-6 col-sm-6 col-6" action="scripts/comprarProducto.php" enctype='multipart/form-data' novalidate>
			<div class="form-row">
				<label> Nombre de usuario:</label>
				<div class="form-group col-md-12">
					<?php
						$Nombre = $_SESSION['username'];
						echo '<input name="name-input" type="text" class="form-control" placeholder="Nombre de usuario" value="'.$Nombre.'" disabled />';
					?>
					<div class="invalid-feedback">
						Por favor, ingrese información válida.
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-10">
					<label> Producto por el que se desean canjear los puntos: </label>
	                <select name="producto" id="producto" class="custom-select" required>
						<option selected isabled> Seleccione un producto</option>
						<?php
							include_once 'scripts/listarProductos.php';
						?>
	                </select>
					<div class="invalid-feedback">
						Por favor, ingrese información válida.
					</div>
				</div>
				<div class="form-group col-md-2">
					<label> Cantidad:</label>
					<?php
						$Cantidad = 1;
						if (isset($_GET['Cantidad']))
							$Cantidad = $_GET['Cantidad'];

						echo '<input name="cant-input" type="number" class="form-control" min="1" placeholder="Cantidad" value="'.$Cantidad.'" required>';
					?>
					<div class="invalid-feedback">
						El valor minimo es 1.
					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="card" name="prodimg" id="prodimg" style="width: 200px; height: 200px">
					<!-- <?php
						// echo "<img src='uploads\\$initimg' style=\"width: 180px; height: 180px;margin: 10px\">";
					?> -->
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

					elseif ($signUpError == 'negativeValue')
						echo 'Por favor ingrese un valor positivo.';

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

<script type="text/javascript">
$(document).on('change','#producto',function(){
	 var val = $(this).val();
	 $.ajax({
		   url: 'scripts/getProdImg.php',
		   data: {producto:val},
		   type: 'GET',
		   dataType: 'html',
		   success: function(result){
				$('#prodimg').html();
				$('#prodimg').html(result);
		   }
	  });
});
</script>


<?php include_once 'footer.php'; ?>
