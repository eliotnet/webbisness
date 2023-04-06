<!DOCTYPE html>
<html>
<head>
	<title>Procesar datos del formulario</title>
</head>
<body>
	<?php
	if(isset($_POST['titulo']) && isset($_POST['contenido'])) {
		$titulo = $_POST['titulo'];
		$contenido = $_POST['contenido'];
		
		//Aquí puedes agregar tu código para procesar los datos del formulario
		
		echo "<h2>El título que ingresaste es: $titulo</h2>";
		echo "<p>El contenido que ingresaste es: $contenido</p>";
	} else {
		echo "<p>No se recibieron datos del formulario</p>";
	}
	?>
</body>
</html>
