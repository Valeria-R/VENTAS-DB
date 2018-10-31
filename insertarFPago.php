<html>
<head>
	<title> Insercion de Datos </title> 
	<meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="CSS1.css"> 
</head>
<body>
<div class="wrap">
    <span class="decor"></span>
    <nav>
      <ul class="primary">
        <li>
          <a href="">Insertar</a>
          <ul class="sub">
            <li><a href="formularioVendedor.php">Vendedor</a></li>
            <li><a href="formularioCiudad.php">Ciudad</a></li>
            <li><a href="formularioFPago.php">Forma de pago</a></li>
            <li><a href="formularioCliente.php">Cliente</a></li>
            <li><a href="formularioFactura.php">Factura</a></li>
          </ul>
        </li>
        <li>
          <a href="">Consultar</a>
          <ul class="sub">
            <li><a href="consultarPrincipal.php">Generales</a></li>
            <li><a href="ComprasClientes.php">Compras por Clientes</a></li>
            <li><a href="VentasFPago.php">Ventas por forma de pago</a></li>
            <li><a href="VentasVendedor.php">Ventas por vendedor</a></li>
            <li><a href="VentasCiudad.php">Ventas por ciudad</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    </div>
	<form>
	   <CENTER><td colspan="2" align="center" style="font-family:Times new roman;"><h3>ADICIONANDO FORMAS DE PAGO</h3></td></center>
	   <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
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
<a class="btn btn-default" href="indexPrueba.php" role="button">Regresar</a>

</form>
</body>
</html>