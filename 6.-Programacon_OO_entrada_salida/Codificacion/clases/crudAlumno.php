<?php 

	class crudAlumno
	{
		public function agregarAlumno($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$psswd = substr( md5(microtime()), 1, 8);
			$sql="INSERT into alumno (nombre,
									nombre_tutor,
									correo,
									fecha_nac,
									lugar_nac,
									curp,
									domicilio,
									telefono,
									id_grupo,
									contraseña)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]',
											'$datos[4]',
											'$datos[5]',
											'$datos[6]',
											'$datos[7]',
											'$datos[8]',
											'$psswd')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatosAlumno($idalumno){
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
					from alumno 
					where id_alumno='$idalumno'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_alumno' => $ver[0],
				'nombre' => $ver[1],
				'nombre_tutor' => $ver[2],
				'correo' => $ver[3],
				'fecha_nac' => $ver[4],
				'lugar_nac' => $ver[5],
				'curp' => $ver[6],
				'domicilio' => $ver[7],
				'telefono' => $ver[8],
				'id_grupo' => $ver[9],
				'contraseña' => $ver[10]
				);
			return $datos;
		}

		public function actualizarAlumno($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE alumno set        nombre='$datos[0]',
									 nombre_tutor='$datos[1]',
									 	   correo='$datos[2]',
										fecha_nac='$datos[3]',
										lugar_nac='$datos[4]',
											 curp='$datos[5]',
										domicilio='$datos[6]',
										 telefono='$datos[7]',
										id_grupo='$datos[8]',
									   contraseña= '$datos[10]'
						where id_alumno='$datos[9]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminarAlumno($idalumno){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from alumno where id_alumno='$idalumno'";
			return mysqli_query($conexion,$sql);
		}
	}



 ?>