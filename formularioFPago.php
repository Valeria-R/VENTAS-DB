<html>
<head>
<title>Insertar datos</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
    <br>
<CENTER><td colspan="2" align="center" style="font-family:Times new roman;"><h3>ADICIONANDO FORMAS DE PAGO</h3></td>
<br>
<form class="form-horizontal" method="get" action="insertarFPago.php" role="form">
	<fieldset>

	<div class="form-group">
	  <label class="col-md-4 control-label" for="cod">Código de la forma de pago</label>  
	  <div class="col-md-4">
	  <input id="cod" name="codigo_f_pago" type="text" placeholder="Introduce el código de la forma de pago" class="form-control input-md" required="">
	  </div>
	</div>


	<div class="form-group">
	  <label class="col-md-4 control-label" for="nom">Nombre de la forma de pago</label>  
	  <div class="col-md-4">
	  <input id="nom" name="nombre_f_pago" type="text" placeholder="Introduce el nombre de la forma de pago" class="form-control input-md" required="">
	  </div>
	</div>

	</fieldset>

<br>
<br>
	<div class="col-sm-12">
			<button type="submit" class="btn btn-prymary">enviar</button>
		</div>		
</center>
</form>
</body>
</html>