<!------ SPDX-License-Identifier: Apache-2.0 ---------->

<?php 

require 'conexion.php';

 //$nombre = $_POST['nombre'];
$nameE = $mysqli->real_escape_string($_POST['nameE']);
$organizerE = $mysqli->real_escape_string($_POST['organizerE']);
$dateE = $mysqli->real_escape_string($_POST['dateE']);
$descriptionE = $mysqli->real_escape_string($_POST['descriptionE']);
$goalE = $mysqli->real_escape_string($_POST['goalE']);
$linkinfoE = $mysqli->real_escape_string($_POST['linkinfoE']);


$sql ="INSERT INTO locations (nombreevento, organizer, eventdate,description, goal, linkinformation) 
VALUES ('$nameE','$organizerE','$dateE','$descriptionE', '$goalE', '$linkinfoE')";

// echo  $sql;

$resultado = $mysqli->query($sql);
if ($resultado>0){
	echo "Registro Agregado";

} else{
	echo "Error al agregar Registro";
}

echo "<br/><a href='index.php' class='btn btn-primary'>Regresar a Pagina Principal</a>";

?>