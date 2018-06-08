<?php
	include_once('scripts/conexion.inc');
	include_once 'header.php';
?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		<?php
			$username = $_SESSION['username'];
		 	$stmt = $conn->query("CALL `verPersona`('$username');");
			$row = $stmt->fetch(PDO::FETCH_NUM);

			$cedula = $row[0];
			$nombre = $row[1];
			$pApellido = $row[2];
			$sApellido = $row[3];
			$telefono = $row[4];
			$email = $row[5];
			$distrito = $row[7];
			$canton = $row[9];
			$provincia = $row[8];
			$pais = $row[10];

			$stmt->closeCursor();


	     ?>

		<div class="row justify-content-center" style="margin: 2% 0 0 0">
			<?php
				echo '<form id="myform" method="post" class="needs-validation col-lg-6 col-md-6 col-sm-6 col-6" novalidate="" action="scripts/form-update.php?id='.$cedula.'" enctype=\'multipart/form-data\'>';
			?>
				<div class="form-row">
					<label> Nombre:</label>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<?php
							if (isset($_GET['Nombre']))
							{
								$pNombre = $_GET['Nombre'];
								echo '<input name="name-input" type="text" class="form-control" placeholder="Nombre" value="'.$pNombre.'" required>';
							}
							else
							{
								echo '<input name="name-input" type="text" class="form-control" placeholder="Nombre" value="'.$nombre.'" required>';
							}
						?>
						<div class="invalid-feedback">
							Por favor, ingrese información válida.
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<?php
							if (isset($_GET['pApellido']))
								$pApellido = $_GET['pApellido'];

							echo '<input name="frstLstName-input" type="text" class="form-control" placeholder="Primer Apellido" value="'.$pApellido.'" required>';

						?>
						<div class="invalid-feedback">
							Por favor, ingrese información válida.
						</div>
					</div>
					<div class="form-group col-md-6">
						<?php
							if (isset($_GET['sApellido']))
								$sApellido = $_GET['sApellido'];

							echo '<input name="secndLstName-input" type="text" class="form-control" placeholder="Segundo Apellido" value="'.$sApellido.'">';
						?>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Nacionalidad:</label>
						<select name="citizenship" name="citizenship" class="custom-select" required>
							<?php
								$stmt = $conn->query("call obtenerPaises();");
					            $temp;

							    while($row = $stmt->fetch(PDO::FETCH_NUM))
							    {
					                if (isset($_GET['pais']) && $_GET['pais'] == $row[0])
					                {
					                    echo "<option value='" . $row[0] . "' selected>" . $row[1] . "</option>";
					                    $temp = $tipo[1];
					                }
									else
										echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
								}
								$stmt->closeCursor();
							?>
						</select>
						<div class="invalid-feedback">
							Por favor, seleccione una opción.
						</div>
					</div>
					<div class="form-group col-md-6">
						<label>Cedula:</label>
						<?php
							if (isset($_GET['cedula']))
								$cedula = $_GET['cedula'];

							echo '<input name="id-input" type="text" class="form-control" pattern="[0-9]{9}" placeholder="Cedula" value="'.$cedula.'" disabled required>';

						?>
						<div class="invalid-feedback">
							Por favor, ingrese información válida.
							Ej. 123456789
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Pais de residencia:</label>
						<select name="pais" name="pais" class="custom-select" required>
							<option selected> Costa Rica </option>"
						</select>
						<div class="invalid-feedback">
							Por favor, seleccione una opción.
						</div>
					</div>
					<div class="form-group col-md-6">
						<label>Provincia de residencia:</label>
						<select name="provincia" id="provincia" class="custom-select" required>
							<?php
								$stmt = $conn->query("call obtenerProvincia(1);");
					            $temp = 1;

							    while($row = $stmt->fetch(PDO::FETCH_NUM))
							    {
					                if (isset($_GET['provincia']) && $_GET['provincia'] == $row[0])
					                {
					                    echo "<option value='" . $row[0] . "' selected>" . $row[1] . "</option>";
					                    $temp = $row[0];
					                }
					                elseif ($provincia == $row[1])
					                {
					                    echo "<option value='" . $row[0] . "' selected>" . $row[1] . "</option>";
					                    $temp = $row[0];
					                }
					                else
					                    echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
								}
								$stmt->closeCursor();
							?>
						</select>
						<div class="invalid-feedback">
							Por favor, seleccione una opción.
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Canton de residencia:</label>
						<select name="canton" id="canton" class="custom-select" required>

						<?php
							$stmt = $conn->query("call obtenerCanton($temp);");

						    while($row = $stmt->fetch(PDO::FETCH_NUM))
						    {
				                if (isset($_GET['canton']) && $_GET['canton'] == $row[0])
				                {
				                    echo "<option value='" . $row[0] . "' selected>" . $row[1] . "</option>";
				                    $temp = $row[0];
				                }
								elseif ($canton == $row[1])
								{
									echo "<option value='" . $row[0] . "' selected>" . $row[1] . "</option>";
									$temp = $row[0];
								}
				                else
				                    echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
							}
							$stmt->closeCursor();
						?>

						</select>
						<div class="invalid-feedback">
							Por favor, seleccione una opción.
						</div>
					</div>
					<div class="form-group col-md-6">
						<label>Distrito de residencia:</label>
						<select name="distrito" id="distrito" class="custom-select" required>

						<?php
							$stmt = $conn->query("call obtenerDistrito($temp);");

						    while($row = $stmt->fetch(PDO::FETCH_NUM))
						    {
				                if (isset($_GET['distrito']) && $_GET['distrito'] == $row[0])
				                {
				                    echo "<option value='" . $row[0] . "' selected>" . $row[1] . "</option>";
				                    $temp = $row[0];
				                }
								elseif ($distrito == $row[1])
								{
									echo "<option value='" . $row[0] . "' selected>" . $row[1] . "</option>";
									$temp = $row[0];
								}
				                else
				                    echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
							}
							$stmt->closeCursor();
						?>

						</select>
						<div class="invalid-feedback">
							Por favor, seleccione una opción.
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>E-mail:</label>
						<?php
							if (isset($_GET['Email']))
								$email = $_GET['Email'];

							echo '<input name="email-input" type="text" class="form-control" pattern=".+@.+\.(com|es)" placeholder="E-mail" value="'.$email.'" required>';

						?>
						<div class="invalid-feedback">
							Por favor, ingrese información válida.
						</div>
					</div>
					<div class="form-group col-md-6">
						<label>Telefono:</label>
						<?php
							if (isset($_GET['Tel']))
								$telefono = $_GET['Tel'];

							echo '<input name="tel-input" type="text" class="form-control" pattern="(\(\+[0-9]{3}\))?[0-9]{8}[0-9]*" placeholder="Telefono" value="'.$telefono.'" required>';

						?>
						<div class="invalid-feedback">
							Por favor, ingrese información válida.
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Nueva contraseña:</label>
						<input name="passwd-input" type="password" class="form-control" placeholder="Contraseña">
						<div class="invalid-feedback">
							Por favor, ingrese información válida.
						</div>
					</div>
					<div class="form-group col-md-6">
						<label>Confirmar contraseña:</label>
						<input name="ckPasswd-input" type="password" class="form-control" placeholder="Confirme la contraseña">
						<div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
					</div>
				</div>

				<?php
					if (isset($_GET['signup']))
					{
						echo '<div class="form row justify-content-center" style="margin: 10% 0 0 0">';
						echo '<div class="alert alert-danger" role="alert">';
						$signUpError = $_GET['signup'];

						if ($signUpError == 'duplicate')
							echo 'La cedula ingresada ya existe.';
						elseif ($signUpError == 'usernameTaken')
							echo 'El nombre de usuario ingresado ya existe.';
						echo '</div>';
						echo '</div>';
					}
				?>
				<div class="form row justify-content-center" style="margin: 10%">
					<button id="btnUpdate" class="btn my-2 my-sm-0 btn-dark" style="margin: 0 1%" form="myform" type="submit" name="submit">
						Actualizar
					</button>
					<button class="btn my-2 my-sm-0 btn-dark" style="margin: 0 1%" type="button" onclick="location.href='home.php'">Cancelar</button>
				</div>
			</form>
		</div>


		<script type="text/javascript">
       $(document).on('change','#provincia',function(){
             var val = $(this).val();
             $.ajax({
                   url: 'scripts/listarCantones.php',
                   data: {provincia:val},
                   type: 'GET',
                   dataType: 'html',
                   success: function(result){
                        $('#canton').html();
                        $('#canton').html(result);
                   }
              });
       });
  </script>

  <script type="text/javascript">
 $(document).on('change','#canton',function(){
	   var val = $(this).val();
	   $.ajax({
			 url: 'scripts/listarDistritos.php',
			 data: {canton:val},
			 type: 'GET',
			 dataType: 'html',
			 success: function(result){
				  $('#distrito').html();
				  $('#distrito').html(result);
			 }
		});
 });
</script>




		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<script type="text/javascript" src="scripts/formValidation.js"></script>
		<script type="text/javascript" src="scripts/checkPasswords.js"></script>
	</body>
</html>
