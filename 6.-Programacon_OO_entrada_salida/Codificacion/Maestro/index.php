   <!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php";  ?>
</head>
<body>

	<div class="container.fluid text-center" style="margin: 40px">
		<div class="row">
			<div class="col-sm-2">
	           <h2>LOGO</h2>
	        </div>
	         <div class="col-sm-8">
	            <div class="page-header">
	                <h1>Nombre de la escuela</h1>
	            </div> 
	        </div>  
	         <div class="col-sm-2">
	            <h2>LOGO</h2>
	        </div>
		</div>
	</div>

	<div class="container.fluid text-center">
		<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
		  <ul class="navbar-nav">
		    <li class="nav-item active">
		      <a class="nav-link" href="#">Active</a>
		   <li class="nav-item active">
		      <a class="nav-link" href="#">Active</a>
		   <li class="nav-item active">
		      <a class="nav-link" href="#">Active</a>
		   <li class="nav-item active">
		      <a class="nav-link" href="#">Active</a>
		   
		  </ul>
		</nav>
	</div>

	<div class="container.fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Datos de alumnos
					</div>
					<div class="card-body">
						<span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
							Agregar nuevo <span class="fa fa-plus-circle"></span>
						</span>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
					<div class="card-footer text-muted">
						By: EVRV
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevo alumno</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo">
						<label>nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>cp</label>
						<input type="text" class="form-control input-sm" id="cp" name="cp">
						<label>telefono</label>
						<input type="text" class="form-control input-sm" id="telefono" name="telefono">
						<label>correo</label>
						<input type="text" class="form-control input-sm" id="correo" name="correo">
						<label>fecha_ingreso_sep</label>
						<input type="text" class="form-control input-sm" id="fecha_ingreso_sep" name="fecha_ingreso_sep">
						<label>fecha_ingreso_zona</label>
						<input type="text" class="form-control input-sm" id="fecha_ingreso_zona" name="fecha_ingreso_zona">
						<label>fecha_ingreso_escuela</label>
						<input type="text" class="form-control input-sm" id="fecha_ingreso_escuela" name="fecha_ingreso_escuela">
						<label>clave</label>
						<input type="text" class="form-control input-sm" id="clave" name="clave">
						<label>curp</label>
						<input type="text" class="form-control input-sm" id="curp" name="curp">
						<label>rfc</label>
						<input type="text" class="form-control input-sm" id="rfc" name="rfc">
						<label>grado_estudios</label>
						<input type="text" class="form-control input-sm" id="grado_estudios" name="grado_estudios">
						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" id="btnAgregarnuevo" class="btn btn-primary">Agregar nuevo</button>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar alumno</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU">
					<input type="text" hidden="" id="idmaestro" name="idmaestro">
						<label>nombreU</label>
						<input type="text" class="form-control input-sm" id="nombreU" name="nombreU">
						<label>cpU</label>
						<input type="text" class="form-control input-sm" id="cpU" name="cpU">
						<label>telefonoU</label>
						<input type="text" class="form-control input-sm" id="telefonoU" name="telefonoU">
						<label>correoU</label>
						<input type="text" class="form-control input-sm" id="correoU" name="correoU">
						<label>fecha_ingreso_sepU</label>
						<input type="text" class="form-control input-sm" id="fecha_ingreso_sepU" name="fecha_ingreso_sepU">
						<label>fecha_ingreso_zonaU</label>
						<input type="text" class="form-control input-sm" id="fecha_ingreso_zonaU" name="fecha_ingreso_zonaU">
						<label>fecha_ingreso_escuelaU</label>
						<input type="text" class="form-control input-sm" id="fecha_ingreso_escuelaU" name="fecha_ingreso_escuelaU">
						<label>claveU</label>
						<input type="text" class="form-control input-sm" id="claveU" name="claveU">
						<label>curpU</label>
						<input type="text" class="form-control input-sm" id="curpU" name="curpU">
						<label>rfcU</label>
						<input type="text" class="form-control input-sm" id="rfcU" name="rfcU">
						<label>grado_estudiosU</label>
						<input type="text" class="form-control input-sm" id="grado_estudiosU" name="grado_estudiosU">
						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
				</div>
			</div>
		</div>
	</div>


</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#btnAgregarnuevo').click(function(){
			datos=$('#frmnuevo').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/agregar.php",
				success:function(r){
					if(r==1){
						$('#frmnuevo')[0].reset();
						$('#tablaDatatable').load('tabla.php');
						alertify.success("agregado con exito :D");
					}else{
						alertify.error("Fallo al agregar :(");
					}
				}
			});
		});

		$('#btnActualizar').click(function(){
			datos=$('#frmnuevoU').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/actualizar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Actualizado con exito :D");
					}else{
						alertify.error("Fallo al actualizar :(");
					}
				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla.php');
	});
</script>

<script type="text/javascript">
	function agregaFrmActualizar(idmaestro){
		$.ajax({
			type:"POST",
			data:"idmaestro=" + idmaestro,
			url:"procesos/obtenDatos.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idmaestro').val(datos['id_maestro']);
				$('#nombreU').val(datos['nombre']);
				$('#cpU').val(datos['cp']);
				$('#telefonoU').val(datos['telefono']);
				$('#correoU').val(datos['correo']);
				$('#fecha_ingreso_sepU').val(datos['fecha_ingreso_sep']);
				$('#fecha_ingreso_zonaU').val(datos['fecha_ingreso_zona']);
				$('#fecha_ingreso_escuelaU').val(datos['fecha_ingreso_escuela']);
				$('#claveU').val(datos['clave']);
				$('#curpU').val(datos['curp']);
				$('#rfcU').val(datos['rfc']);
				$('#grado_estudiosU').val(datos['grado_estudios']);
			}
		});
	}

	function eliminarDatos(idmaestro){
		alertify.confirm('Eliminar un juego', '¿Seguro de eliminar este juego pro :(?', function(){ 

			$.ajax({
				type:"POST",
				data:"idmaestro=" + idmaestro,
				url:"procesos/eliminar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});

		}
		, function(){

		});
	}
</script>