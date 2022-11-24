
<?php
class ControladorFormulario
{
	/**
	 * Guarda los datos en la base de datos
	 */
	static public function ctrRegistro()
	{
		if (isset($_POST['registroNombre'])) {

			$tabla = "registro";

			$datos = array('codigo_inst' => $_POST["registroCodigo"],
				'cedula' => $_POST["registroCedula"],
				'nombre' => $_POST["registroNombre"],
				'apellido' => $_POST["registroApellido"],
				'correo' => $_POST["registroCorreo"],
				'telefono' => $_POST["registroTelefono"],
				'ciudad' => $_POST["registroCiudad"],
				'departamento' => $_POST["registroDepartamento"],
				'cargo' => $_POST["registroCargo"],
				'password' => $_POST["registroPassword"],
				'password1' => $_POST["registroPassword1"]);


			$respuesta = ModeloFormularios::mdlRegistrosUsuario($tabla, $datos);
			return $respuesta;
		}
	}
	/**
	 * Seleccionar registros de la base de datos
	 */
	static public function ctrSeleccionarRegistros($item, $valor)
	{
		$tabla = "registro";
		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
		return $respuesta;
	}

}


