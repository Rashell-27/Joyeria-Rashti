<?php
$conec = new mysqli("localhost", "root", "", "joyeriarashti");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];

$sql_insert = "INSERT INTO contacto (nombre, apellido, email, comentario) VALUES ('$nombre', '$apellido', '$email', '$comentario')";

If($conec->query($sql_insert) === TRUE) {
	echo '<div align="center"> "Tu comentario se ha enviado con éxito"</div>';
}
?>