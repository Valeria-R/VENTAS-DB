<html>
<head>
<title>Insertar datos</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<form>
   <CENTER><td colspan="2" align="center"><h2>ADICIONANDO CIUDADES</h2></td></center>
   <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
</form>
<form method="get" action="insertarCiudad.php" role="form">
	<div class="form-group">
		<label for="cod">Codigo de la ciudad:</label>
		<input type="text" name="codigo_ciudad" class="form-control" id="cod"  placeholder="Introduce el codigo de la ciudad"> <br>
	</div>

	<div class="form-group">
		<label for="nom">Nombre de la ciudad:</label>
		<input type="text" name="nombre_ciudad" class="form-control" id="nom"  placeholder="Introduce el nombre de la ciudad"> <br>
	</div>


<br>
<br>
	<div class="col-sm-12">
		<button type="submit" class="btn btn-prymary">enviar</button>
	</div>	

</form>
</body>
</html>