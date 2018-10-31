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
   <CENTER>
   <td colspan="2" align="center" style="font-family:Times new roman;"><h3>ADICIONANDO CLIENTE</h3></td>
<br>
<form class="form-horizontal" method="get" action="insertarCliente.php" role="form">
		<fieldset>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="cod">Código del cliente</label>  
		  <div class="col-md-4">
		  <input id="cod" name="codigo_cliente" type="text" placeholder="Introduce el código del cliente" class="form-control input-md" required="">
		  </div>
		</div>


		<div class="form-group">
		  <label class="col-md-4 control-label" for="nom">Nombre del cliente</label>  
		  <div class="col-md-4">
		  <input id="nom" name="nombre_cliente" type="text" placeholder="Introduce el nombre del cliente" class="form-control input-md" required="">
		  </div>
		</div>

	<div class="form-group">

		<label class="col-md-4 control-label" for="ven">Vendedor</label>
    	<div class="col-md-4">
		
		<?php
		$link = mysqli_connect("mysql.webcindario.com","pruebabdkl","salcedo99","pruebabdkl");
		$result = mysqli_query($link,'SELECT cod_vendedor,nom_vendedor FROM vendedor');
		echo "<select name='codigo_vendedor' class='form-control id='ven'>";
		while ($row = mysqli_fetch_row($result)) {
			echo "<option value='".$row[0]."'> ".$row[1]." </option>";
		}
		echo"	</select> <br>";
		?>
		</div>
	</div>

	<div class="form-group">

		<label class="col-md-4 control-label" for="ciu">Ciudad</label>
    	<div class="col-md-4">

		<?php
		$result = mysqli_query($link,'SELECT cod_ciudad,nom_ciudad FROM ciudad');
		echo "<select name='codigo_ciudad' class='form-control id='ciu'>";
		while ($row = mysqli_fetch_row($result)) {
			echo "<option value='".$row[0]."'> ".$row[1]." </option>";
		}
		echo"	</select> <br>";
		?>
		</div>
	</div>

	<div class="form-group">

		<label class="col-md-4 control-label" for="fop">Forma de pago</label>
    	<div class="col-md-4">
		<?php
		$result = mysqli_query($link,'SELECT cod_f_pago,nom_f_pago FROM f_pago');
		echo "<select name='codigo_f_pago' class='form-control id='fop'>";
		while ($row = mysqli_fetch_row($result)) {
			echo "<option value='".$row[0]."'> ".$row[1]." </option>";
		}
		echo"	</select> <br>";
		?>
		</div>
	</div>

		</fieldset>
<br>
<br>
	<div class="col-sm-12">
		<button type="submit" class="btn btn-prymary">Enviar</button>
	</div>	
</center>
</form>
</body>
</html>

