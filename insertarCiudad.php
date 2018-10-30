<html>
<head>
	<title> Insercion de Datos </title> 
	<meta charset="utf-8">
</head>
<body>
	<form>
	   <CENTER><td colspan="2" align="center"><h2>ADICIONANDO CIUDADES</h2></td></center>
	   <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
	</form>
	<form>
		 <LEFT><td colspan="2" align="left"><h3> Ciudad Insertado </h3></td></LEFT>
		<table align="left" width="100" cellspacing="2" cellpadding="2" border="0">
	</form>

	<?php
		//campos
	   $v_cod_ciudad=$_GET["codigo_ciudad"];
	   $v_nom_ciudad="'".$_GET["nombre_ciudad"]."'";
	$conexion = mysqli_connect("mysql.webcindario.com","pruebabdkl","salcedo99","pruebabdkl"); //conexion
	$sql ="INSERT INTO ciudad VALUES($v_cod_ciudad, $v_nom_ciudad)";
	$result = mysqli_query($conexion, $sql);
	if ($result) {
		echo "Inserción exitosa";
	}else{
		echo "No se pudo insertar los datos. Intente nuevamente";
	}
	echo"<BR>";
	?>
	<a href="insertarDatos.php">regresar</a>

</form>
</body>
</html>