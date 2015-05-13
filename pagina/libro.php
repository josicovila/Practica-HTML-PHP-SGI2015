<?php
include 'includes/header.php';
?>
<center>


<h1>Deja tu comentario</h1>
<form action="guardar-libro.php" method="post">
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


<br><br>



<h1>Comentarios actuales</h1>
<table border="1" cellpadding="10" width="90%">
<tr>
	<th>Nombre</th>
	<th>Correo</th>
	<th>Comentario</th>
	<th>Fecha</th>
	<th>Responder</th>
</tr>
<?php
$fp = fopen("visitas.txt", "r+");


while(!feof($fp)){
	$tupla=fgets($fp);
	if(strlen($tupla)>0){
		list($linea, $nombre, $correo, $comentario, $fecha) = explode(";", $tupla);
?>
<tr>
	<td cellpadding="10"><?php echo $nombre?></td>
	<td cellpadding="10"><?php echo $correo?></td>
	<td cellpadding="10"><?php echo $comentario?></td>
	<td cellpadding="10"><?php echo $fecha?></td>
	<td cellpadding="10"><a href="responder.php?linea=<?php echo $linea?>">responder</a></td>
</tr>
<?php
		if(file_exists($linea.".txt")){
			$fp2 = fopen($linea.".txt", "r+");
			while(!feof($fp2)){
				$tupla2 = fgets($fp2);
				
				//$list($nombre2, $correo2, $comentario2, $fecha2) = explode(";", $tupla2);
				$respuesta = explode(";", $tupla2);
				if(isset($respuesta[1])){
			?>
<tr style="color: blue">
	<td cellpadding="10"><?php echo $respuesta[0]?></td>
	<td cellpadding="10"><?php echo $respuesta[1]?></td>
	<td cellpadding="10"><?php echo $respuesta[2]?></td>
	<td cellpadding="10"><?php echo $respuesta[3]?></td>
</tr>
			<?php
				}
			}
			fclose($fp2);
		}
	}
}
fclose($fp);
?>
</table>
</center>
<br><br><br><br><br><br><br><br>
<font size="4">01/12/2014</font> <a href="#inicio">Volver arriba</a>
</body>
</html>