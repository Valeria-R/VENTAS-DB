<html>
<head>Base de datos conectada con postgres SQL</head>
<BR>
<H1>Andrex<</H1>
<body>
<?php
	$v_usuario=  $_POST["username"];
	$v_password= $_POST["password"];
	$v_tabla=    $_POST["tabla"];
	$conexion = pg_connect("host=localhost port=5432 dbname=Ventas user=$v_usuario password=$v_password");
	echo "Datos de la tabla $v_tabla";
	echo "<BR>";

	if($v_tabla=="factura"){
	$sql="select * from $v_tabla";
	$resultado_set=pg_Exec($conexion, $sql);
	  while($row=pg_fetch_array($resultado_set)){
	      echo $row["codigo_factura"]."--->".$row["nombre_cliente"]."--->" .$row["valor_factura"];
	      echo "<BR>";
	 }
	};
	if ($v_tabla=="cliente"){
	$sql="select *from $v_tabla";
	$resultado_set=pg_Exec($conexion, $sql);
	    while($row=pg_fetch_array($resultado_set)){
	     echo $row["codigo_cliente"]."--->".$row["nombres"]."--->".$row["apellidos"]."--->".$row["dirección"]."--->".$row["teléfono"]."--->".$row["email"]."--->".$row["cargo"]."--->".$row["edad"];
	     echo "<BR>";
	   }
	};
	pg_close($conexion);
?>
</body>
</html>