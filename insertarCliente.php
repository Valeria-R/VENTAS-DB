
<html>
<head>
	<meta charset="utf-8">
	<title> Inserción de Datos </title> 
</head>
<body>
<form>
   <CENTER><td colspan="2" align="center"><h2>ADICIONANDO CLIENTES</h2></td></center>
   <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
</form>
<form>
 <LEFT><td colspan="2" align="left"><h3> Factura Insertada</h3></td></LEFT>
<table align="left" width="100" cellspacing="2" cellpadding="2" border="0">
</form>

<?php
	//campos
   $v_cod_cliente=$_GET["codigo_cliente"];
   $v_nom_cliente="'".$_GET["nombre_cliente"]."'";
   $v_cod_vendedor=$_GET["codigo_vendedor"];
   $v_cod_ciudad=$_GET["codigo_ciudad"];
   $v_cod_f_pago=$_GET["codigo_f_pago"];


$conexion = mysqli_connect("mysql.webcindario.com","pruebabdkl","salcedo99","pruebabdkl"); //conexion

$sql ="INSERT INTO cliente VALUES($v_cod_cliente, $v_nom_cliente, $v_cod_vendedor, $v_cod_ciudad, $v_cod_f_pago)";

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