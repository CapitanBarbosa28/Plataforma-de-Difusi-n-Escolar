<?php 

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT id_alumno,
nombre,
nombre_tutor,
correo,
fecha_nac,
lugar_nac,
curp,
domicilio,
telefono,
id_grupo,
contraseña
from alumno";
$result=mysqli_query($conexion,$sql);
?>


<div class="container.fluid">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table class="table table-sm table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Nombre del tutor</td>
				<td>Correo electrónico</td>
				<td>Fecha de nacimiento</td>
				<td>Lugar de nacimiento</td>
				<td>CURP</td>
				<td>Domicilio</td>
				<td>Teléfono</td>
				<td>Grupo</td>
				<td>Contraseña</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Nombre del tutor</td>
				<td>Correo electrónico</td>
				<td>Fecha de nacimiento</td>
				<td>Lugar de nacimiento</td>
				<td>CURP</td>
				<td>Domicilio</td>
				<td>Teléfono</td>
				<td>Grupo</td>
				<td>Contraseña</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr>
				    <td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<td><?php echo $mostrar[5] ?></td>
					<td><?php echo $mostrar[6] ?></td>
					<td><?php echo $mostrar[7] ?></td>
					<td><?php echo $mostrar[8] ?></td>
					<td><?php echo $mostrar[9] ?></td>
					<td><?php echo $mostrar[10] ?></td>
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-pencil-square-o"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-danger btn-sm" onclick="eliminarAlumno('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>
</div>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>