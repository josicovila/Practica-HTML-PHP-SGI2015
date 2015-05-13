<?php
//variables del formulario
$enviar = true;
if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['conocer']) || empty($_POST['sugerencias'])){
?>
	<script>
		alert('Por favor, rellene todos los campos');
	</script>
<?php
	$enviar = false;
} else {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$conocer= $_POST['conocer'];
	$deporte= $_POST['deporte'];
	$sugerencias= $_POST['sugerencias'];
}

//Construccion del mensaje
$mensaje = "Nombre: ".$nombre."\n";
$mensaje .= "Correo: ".$correo."\n";
$mensaje .= "Cómo nos conoció: ".$conocer."\n";
$mensaje .= "Deporte favorito: ".$deporte."\n";
$mensaje .= "Sugerencias:\n".$sugerencias;

$asunto = "Correo desde formulario - Josico";

$destinatario = "mail@mail.com";

$cabeceras = 'From: correo@electronico.com' . "\r\n" .
    'Reply-To: correo@electronico.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if($enviar){
	@mail($destinatario, $asunto, $mensaje, $cabeceras);
}
?>
<script>
	self.location="contacto.php?enviar=<?php echo $enviar;?>";
</script>