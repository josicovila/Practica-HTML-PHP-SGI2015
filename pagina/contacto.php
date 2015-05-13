<?php
include 'includes/header.php';
?>
<h1>Formulario de contacto</h1><br>
<?php
$enviar=false;
if(isset($_GET['enviar'])){ 
	$enviar = $_GET['enviar'];
	if($enviar){
		echo "<span style='color:green'>MENSAJE ENVIADO!!! GRACIAS.</span><br><br>";
	}
}

?>
Utilice el siguiente formulario de contacto para enviarnos sus ideas.
<br><br>

<form action="enviar.php" method="post">

<input type="hidden" value="Enviado por Josico">
<table cellpadding="15">
<tr>
	<td>Nombre:</td>
	<td><input type="text" name="nombre"></td>
</tr>
<tr>
	<td>Correo electrónico:</td>
	<td><input type="text" name="correo"></td>
</tr>
<tr>
	<td>¿Cómo nos conoció?</td>
	<td> <input type="radio" name="conocer" value="television"> Televisión<br>
		 <input type="radio" name="conocer" value="internet"> Internet<br>
		 <input type="radio" name="conocer" value="radio"> Radio<br>
		 <input type="radio" name="conocer" value="prensa"> Prensa escrita
	</td>
</tr>
<tr>
	<td>¿Cúal es su deporte favorito?</td>
	<td><select name="deporte">
		<option value="futbol">Fútbol</option>
		<option value="baloncesto">Baloncesto</option>
		<option value="balonmano">Balonmano</option>
		<option value="formula1">Fórmula 1</option>
		</select>
	</td>
</tr>
<tr>
	<td colspan="2">Escriba sus sugerencias:<br>
		<textarea name="sugerencias" rows="5" cols="40"></textarea>
	<td>
</tr>
<tr>
	<td colspan="2"><input type="submit" Value="Enviar"> <input type="reset" Value="borrar">
</tr>
</table>
</form>



<br><br><br><br><br><br><br><br>
<font size="4">01/12/2014</font> <a href="#inicio">Volver arriba</a>
</body>
</html>