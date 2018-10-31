<html>
<head>Base de datos conectada con  MYSQL</head>
<BR>
<body>
<?php
	$conexion = mysqli_connect("mysql.webcindario.com","pruebabdkl","salcedo99","pruebabdkl");
	echo "Datos de la tabla ciudad";
	echo "<BR>";
	$sql="SELECT * FROM ciudad";
	$resultado_set=mysqli_query($conexion, $sql);
	    while($row=mysqli_fetch_array($resultado_set)){
	     echo $row["cod_ciudad"]."--->".$row["nom_ciudad"];
	     echo "<BR>";
	   }
	   mysqli_close($conexion);
?>
</body>
</html>