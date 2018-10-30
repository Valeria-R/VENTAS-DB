
<html>
<head>
	<title> Insercion de Datos </title> 
</head>
<body>
<form>
   <CENTER><td colspan="2" align="center"><h2>ADICIONANDO FACTURAS</h2></td></center>
   <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
</form>
<form>
 <LEFT><td colspan="2" align="left"><h3> Factura Insertada</h3></td></LEFT>
<table align="left" width="100" cellspacing="2" cellpadding="2" border="0">
</form>

<?php
	//campos
   $v_cod_factura=$_GET["codigo_factura"];
   $v_cod_cliente=$_GET["codigo_cliente"];
   $v_valor_factura=$_GET["valor_factura"];


$conexion = mysqli_connect("mysql.webcindario.com","pruebabdkl","salcedo99","pruebabdkl"); //conexion

$sql ="INSERT INTO factura VALUES($v_cod_factura, $v_valor_factura, $v_cod_cliente)";

$result = mysqli_query($conexion, $sql);

if ($result) {
	echo "insercion exitosa";
}else{
	echo "no se pudo insertar los datos. Intente nuevamente";
}
echo"<BR>";
?>
<a href="insertarDatos.php">regresar</a>

</form>
</body>
</html>