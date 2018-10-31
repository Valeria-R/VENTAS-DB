<!DOCTYPE html>
<html>
<head>
	<title>Consultas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
	<CENTER>
		<td colspan="2" align="CENTER"><h3>Busqueda en la base de datos</h3></td>
		<form action="conectarPrincipal.php" method="POST">
			<table align="CENTER" width="225" cellspacing="2" cellpadding="2" border="0">
			<center>
				<form class="form-horizontal">
				<fieldset>
					<div class="form-group" align="center">
					  <label class="col-md-4 control-label" for="TABLA"></label><div class="col-md-4">
						<select id="TABLA" name="TABLA" class="form-control">
					      <option value="factura">Factura</option>
					      <option value="cliente">Cliente</option>
					      <option value="ciudad">Ciudad</option>
					      <option value="f_pago">Forma de pago</option>
					      <option value="vendedor">Vendedor</option>
					    </select>
					  </div>
					</div>
				</fieldset>
				</form>
			</center>
					<br>
				<div class="form-group">
				  <label class="col-md-4 control-label" for="boton_buscar"></label>
				  <div class="col-md-4">
				    <center><button type="submit" id="boton_buscar" name="boton_buscar" class="btn btn-prymary">Buscar</button></center>
				  </div>
				</div>
			</table>

		</form>
	</CENTER>
</body>
</html>