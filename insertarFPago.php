<html>
<head>
	<title> Insercion de Datos </title> 
	<meta charset="utf-8">
</head>
<body>
	<form>
	   <CENTER><td colspan="2" align="center"><h2>ADICIONANDO FORMAS DE PAGO</h2></td></center>
	   <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
	</form>
	<form>
		 <LEFT><td colspan="2" align="left"><h3> Forma de pago Insertado </h3></td></LEFT>
		<table align="left" width="100" cellspacing="2" cellpadding="2" border="0">
	</form>

	<?php
		//campos
	   $v_cod_f_pago=$_GET["codigo_f_pago"];
	   $v_nom_f_pago="'".$_GET["nombre_f_pago"]."'";

	$conexion = mysqli_connect("mysql.webcindario.com","pruebabdkl","salcedo99","pruebabdkl"); //conexion
	$sql ="INSERT INTO f_pago VALUES($v_cod_f_pago, $v_nom_f_pago)";
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