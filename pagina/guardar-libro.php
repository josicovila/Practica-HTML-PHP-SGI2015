<?php
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$comentario = $_POST['comentario'];

if(strlen($nombre)>0 && strlen($correo)>0 && strlen($comentario)>0){
	$fp = fopen("visitas.txt", "a");
	$lineas = count(file("visitas.txt")); 
	
	fputs($fp, $lineas.";".$nombre.";".$correo.";".str_replace("\n", "<br>", $comentario).";".date('d/m/Y').PHP_EOL);
	
	fclose($fp);
}
?>
<script>
	self.location = "libro.php";
</script>