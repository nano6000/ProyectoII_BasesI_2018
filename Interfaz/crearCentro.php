<?php

    include_once 'scripts/conexion.inc';
    include_once 'header.php';

?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <div class="row justify-content-center" style="margin: 3% 0 0 0">
        <form id="myform" method="post" class="needs-validation col-lg-6 col-md-6 col-sm-6 col-6" novalidate="" action="scripts/insertCentro.php">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Nombre:</label>
                    <input name="name-input" type="text" class="form-control" placeholder="Nombre del centro de acopio" required>
                    <div class="invalid-feedback">
                        Por favor, ingrese información válida.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Usuario administrador:</label>
                    <select name="usuario" name="usuario" class="custom-select" required>
                        <?php
                            $stmt = $conn->query("call usuariosNormales();");
                            $temp;

                            while($row = $stmt->fetch(PDO::FETCH_NUM))
                            {
                                if (isset($_GET['usuario']) && $_GET['usuario'] == $row[0])
                                {
                                    echo "<option value='" . $row[0] . "' selected>" . $row[0] . "</option>";
                                    $temp = $tipo[1];
                                }
                                else
                                    echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                            }
                            $stmt->closeCursor();
                        ?>
                    </select>
                    <div class="invalid-feedback">
                        Por favor, seleccione una opción.
                    </div>
                </div>
				<div class="form-group col-md-6">
                    <label>Contacto:</label>
                    <input name="contacto" type="text" class="form-control" pattern="(\(\+[0-9]{3}\))?[0-9]{8}[0-9]*" placeholder="Contacto" required>
					<div class="invalid-feedback">
						Por favor, ingrese información válida.
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
                    <label>Provincia:</label>
                    <select name="provincia" id="provincia" class="custom-select" required>
                        <?php
                            $stmt = $conn->query("call obtenerProvincia(1);");
                            $temp = 1;

                            while($row = $stmt->fetch(PDO::FETCH_NUM))
                            {
                                if (isset($_GET['provincia']) && $_GET['provincia'] == $row[0])
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
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Canton:</label>
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
                            else
                            echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                        }
                        $stmt->closeCursor();
                    ?>

                    </select>  <br> <br>
                    <div class="invalid-feedback">
                        Por favor, seleccione una opción.
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Distrito:</label>
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
            <div class="form-row" style="margin: -5% 0 0 0">
				<label>Coordenadas:</label>
			</div>
			<div class="form-row">
                <div class="form-group col-md-6">
                    <input name="Xpos-input"	type="text" class="form-control" placeholder="X\Longitud" required>
                    <div class="invalid-feedback">
                        Por favor, ingrese información válida.
                    </div>
                </div>
				<div class="form-group col-md-6">
					<input name="Ypos-input" type="text" class="form-control" placeholder="Y\Latitud" required>
					<div class="invalid-feedback">
						Por favor, ingrese información válida.
					</div>
				</div>
            </div>

            <?php
                if (isset($_GET['insertsuccess']))
                {
                    echo '<div class="form row justify-content-center" style="margin: 2% 0 -2% 0">';
                    echo '<div class="alert alert-success" role="alert">';
                    echo 'Centro de acopio insertado existosamente.';
                    echo '</div>';
                    echo '</div>';
                }
            ?>

            <div class="form row justify-content-center" style="margin: 5%">
                <button id="btnSignIn" class="btn my-2 my-sm-0 btn-dark" style="margin: 0 1%" form="myform" type="submit" name="submit">
                    Crear
                </button>
                <button class="btn my-2 my-sm-0 btn-dark" style="margin: 0 1%" type="button" onclick="location.href='homeUser.php'">Cancelar</button>
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
