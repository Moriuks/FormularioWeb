<!DOCTYPE html>
<html>
<title>Formulario Proyecto</title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	
  	<!--Inicializar AngularJS-->
	<body ng-app="">

	<!--Script AngularJS-->




  	<!--JQuery-->
  	<script> 
	$(document).ready(function(){
	  $("#flip").click(function(){
	    $("#panel").slideToggle("slow");
	  });

	  $("#flip_recursos").click(function(){
	    $("#recursos_panel").slideToggle("slow");
	  });

	  $("#flip_actividades").click(function(){
	    $("#actividades_panel").slideToggle("slow");
	  });

	  $("#animate").click(function(){
	    $("#aprobado").animate({
	      height: 'toggle'
	    });
	  });

	  $("#hide").click(function(){
	    $("#aviso").hide();
	  });
	  $("#show").click(function(){
	    $("#aviso").show();
	  });
	

	});
	</script>
    <body>
        <form name="frmUser" method="post" action="alta.php">
            <div class="button_link"><a href="index.php"> Back to List </a></div>
            <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
                <thead>
                    <tr>
                        <th colspan="2" class="table-header">Registro de poryecto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row">
                        <td><label>Proyecto</label></td>
                        <td><input type="text" name="proyecto" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Empresa</label></td>
                        <td><input type="text" name="empresa" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Representante Legal</label></td>
                        <td><input type="text" name="repLegal" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Cargo del Representante</label></td>
                        <td><input type="text" name="cargoRepresentante" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Nombre del Contacto</label></td>
                        <td><input type="text" name="contacto" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Puesto del Contacto</label></td>
                        <td><select name="puesto">
					    <option value="projectManager">Scrum Master</option>
					    <option value="programador">Product Owner</option>
                        <option value="developer">Developer</option>
                        <option value="stakeHolder">Stake Holder</option>
					  </select></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Telefono</label></td>
                        <td><input type="text" name="telefono" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Correo</label></td>
                        <td><input type="text" name="correo" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Descripción del Proyecto:</label></td>
                        <td><textarea  rows="5" name="descripcion" class="txtField"></textarea></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Alcance del Proyecto:</label></td>
                        <td><textarea  rows="5" name="alcance" class="txtField"></textarea></td>
                    </tr>

                    <!-- Empieza Definicion del Proyecto -->
                    <!-- Seccion 2-->
                    <tr>
                        <td><h2>Definion del Proyecto</h2></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Modulo Involucucrado</label></td>
                        <td><input type="text" name="mInvolucrado" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Fecha de Inicio</label></td>
                        <td><input type="date" class="txtField" name="fecha_inicio"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Fecha de Termino</label></td>
                        <td><input type="date" class="txtField" name="fecha_termino"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Nivel de Complejidad</label></td>
                        <td><select name="complejidad">
					    <option value="baja">Baja</option>
					    <option value="mediana">Mediana</option>
                        <option value="alta">Alta</option>
                        <option value="noProblema">No problema,i got this</option>
					  </select></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Entregables Esperados:</label></td>
                        <td><textarea  rows="5" name="entregables" class="txtField"></textarea></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Actividades a Realizar:</label></td>
                        <td><textarea  rows="5" name="actsRealizar" class="txtField"></textarea></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Recursos requeridos:</label></td>
                        <td><textarea  rows="5" name="recursosRequeridos" class="txtField"></textarea></td>
                    </tr>
                    <!-- Seccion 2-->
                    <!-- acaba Definicion del Proyecto -->

                    <!-- Empieza Seccion 3 -->
                    <!-- Asignacion del proyecto -->
                    <tr class="table-row">
                        <td><label>Integrantes del Equipo:</label></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Alumno1</label></td>
                        <td><input type="text" class="txtField" name="a1Nombre">
                        <td><input type="text" class="txtField" name="a1Apellido"></td></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Alumno2</label></td>
                        <td><input type="text" class="txtField" name="a2Nombre">
                        <td><input type="text" class="txtField" name="a2Apellido"></td></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Alumno3</label></td>
                        <td><input type="text" class="txtField" name="a3Nombre">
                        <td><input type="text" class="txtField" name="a3Apellido"></td></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Alumno4</label></td>
                        <td><input type="text" class="txtField" name="a4Nombre">
                        <td><input type="text" class="txtField" name="a4Apellido"></td></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Recursos:</label></td>
                        <td><input type="checkbox"  ng-model="VarRecursos">
                        <p ng-show="VarRecursos">Cantidad: $<input name="recursos" type="text" ng-model="recursos"></p>
                        <p ng-show="VarRecursos">Recursos en dólares: {{recursos/19}}</p></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Subir Proyecto</label></td>
                        <td><input type="file" class="txtField" name="archivo"></td>
                    </tr>

                    <!-- Boton para cargar a BD -->
                    <tr class="table-row">
                        <td colspan="2"><input type="submit" name="submit" value="Submit" class="demo-form-submit"></td>
                    </tr>
                </tbody>
            </table>
            </form>
    </body>
</html>