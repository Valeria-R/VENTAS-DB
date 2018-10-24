<html>
<head>
<title>Insertar datos</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<form>
   <CENTER><td colspan="2" align="center"><h2>ADICIONANDO FACTURAS</h2></td></center>
   <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
</form>
<form method="get" action="conexionVentas.php" role="form">
	<div class="form-group">
		<label for="fact">Codigo de la factura:</label>
		<input type="text" name="codigo_factura" class="form-control" id="fact"  placeholder="Introduce el codigo de la factura"> <br>
	</div>

	<div class="form-group">
		<label for="val">Valor de la factura:</label>
		<input type="text" name="valor_factura" class="form-control" id="val"  placeholder="Introduce el valor de la factura"> <br>
	</div>

	<div class="form-group">
		<label for="cli">Codigo del cliente:</label>
		<input type="text" name="codigo_cliente" class="form-control" id="cli"  placeholder="Introduce el codigo del cliente"> <br>
	</div>

<br>
<br>
	<div class="col-sm-12">
		<button type="submit" class="btn btn-prymary"><a href="https://www.youtube.com/?gl=CO&hl=es-419">enviar</a></button>
	</div>	

</form>
</body>
</html>

