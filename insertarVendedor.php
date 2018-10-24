<html>
<head>
	<title> Insercion de Datos </title> 
	<meta charset="utf-8">
</head>
<body>
	<form>
	   <CENTER><td colspan="2" align="center"><h2>ADICIONANDO VENDEDORES</h2></td></center>
	   <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
	</form>
	<form>
		 <LEFT><td colspan="2" align="left"><h3> Vendedor Insertado </h3></td></LEFT>
		<table align="left" width="100" cellspacing="2" cellpadding="2" border="0">
	</form>

	<?php
		//campos
	   $v_cod_vendedor=$_GET["codigo_vendedor"];
	   $v_nom_vendedor="'".$_GET["nombre_vendedor"]."'";

	$conexion = pg_connect("host=localhost port=5432 dbname=VENTAS user=postgres password=123"); //conexion
	$sql ="INSERT INTO vendedor VALUES($v_cod_vendedor, $v_nom_vendedor)";
	$result = pg_Exec($conexion, $sql);
	if ($result) {
		echo "inserción exitosa";
	}else{
		echo "No se pudo insertar los datos. Intente nuevamente";
	}
	echo"<BR>";
	?>
	<a href="insertarDatos.php">regresar</a>

</form>
</body>
</html>