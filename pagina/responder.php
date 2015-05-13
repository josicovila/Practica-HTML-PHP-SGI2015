<?php
include 'includes/header.php';
?>
<?php
$linea = $_GET['linea'];

$fp = fopen("visitas.txt", "r+");

!$encontrado = FALSE;
while(!$encontrado && !feof($fp)){
	$tupla = fgets($fp);
	list($id, $nombre, $correo, $comentario, $fecha) = explode(";", $tupla);
	if($id == $linea) $encontrado = TRUE;
}
?>
<h1>Responder al comentario:</h1>
<table border="1">
<tr>
	<td><?php echo $nombre?></td>
	<td><?php echo $correo?></td>
	<td><?php echo $comentario?></td>
	<td><?php echo $fecha?></td>
</tr>
</table>
<form action="guardar-respuesta.php?linea=<?php echo $linea?>" method="post">
<table cellpadding="15">
<tr>
	<td>Nombre:</td>
	<td><input type="text" name="nombre"></td>
</tr>
<tr>
	<td>Correo electrónico:</td>
	<td><input type="text" name="email"></td>
</tr>
<tr>
	<td>Comentario:</td>
	<td><textarea name="comentario"></textarea></td>
</tr>
<tr>
	<td colspan="2"><input type="submit" Value="Enviar"> <input type="reset" Value="borrar">
</tr>
</table>
</form>
</body>
</html>