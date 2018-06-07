<?php

    include_once 'scripts/conexion.inc';
    include_once 'header.php';

?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <div class="row justify-content-center" style="margin: 3% 0 0 0">
        <form id="myform" method="post" class="needs-validation col-lg-6 col-md-6 col-sm-6 col-6" novalidate="" action="scripts/insertComercio.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre:</label>
                    <input name="name-input" type="text" class="form-control" placeholder="Nombre del comercio" required>
                    <div class="invalid-feedback">
                        Por favor, ingrese información válida.
                    </div>
                </div>
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
            </div>
            <div class="form-row">
				<div class="form-group col-md-6">
                    <label>Contacto:</label>
                    <input name="contacto" type="text" class="form-control" pattern="(\(\+[0-9]{3}\))?[0-9]{8}[0-9]*" placeholder="Contacto" required>
					<div class="invalid-feedback">
						Por favor, ingrese información válida.
					</div>
				</div>
                <div class="form-group col-md-6">
                    <label>Tipo de comercio:</label>
                    <select name="tipoComercio" name="tipoComercio" class="custom-select" required>
                        <?php
                            $stmt = $conn->query("call obtenerTipoComercio();");
                            $temp;

                            while($row = $stmt->fetch(PDO::FETCH_NUM))
                                echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";

                            $stmt->closeCursor();
                        ?>
                    </select>
                    <div class="invalid-feedback">
                        Por favor, seleccione una opción.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <label>Descripcion:</label>
                <input name="descrip-input" type="text" class="form-control" placeholder="Descripcion del comercio" required>
                <div class="invalid-feedback">
                    Por favor, ingrese información válida.
                </div>
            </div>

            <?php
                if (isset($_GET['insertsuccess']))
                {
                    echo '<div class="form row justify-content-center" style="margin: 2% 0 -2% 0">';
                    echo '<div class="alert alert-success" role="alert">';
                    echo 'Comercio insertado existosamente.';
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
