<!------ SPDX-License-Identifier: Apache-2.0 ---------->
<?php 

require 'conexion.php';

 //$nombre = $_POST['nombre'];
 if  (isset($_GET['id'])) {

		$id = $mysqli->real_escape_string($_GET['id']);


		$sql ="DELETE FROM locations WHERE id = '$id'";

		// echo  $sql;

		$resultado = $mysqli->query($sql);
		if ($resultado>0){
			echo "Registro Eliminado";

		} else{
			echo "Error al eliminar Registro";
		}

		echo "<br/><a href='events.php' class='btn btn-primary'>Regresar a Pagina Eventos</a>";
		header('Location: events.php');

 }
?>