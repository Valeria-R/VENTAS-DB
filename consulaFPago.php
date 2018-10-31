<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<BR>
<body>
	<center><h3>Datos de las formas de pago</h3></center>
	<br>
<center><table class="table table-striped">
	<thead>
		<tr>
			<th width="100px">Codigo de la forma de pago</th>
			<th width="250px">Nombre de la forma de pago</th>
		</tr>
	</thead>
	<tbody>
<body>
<?php
	$conexion = mysqli_connect("mysql.webcindario.com","pruebabdkl","salcedo99","pruebabdkl");
	$sql="SELECT * FROM f_pago";
	$resultado_set=mysqli_query($conexion, $sql);
	    while($row=mysqli_fetch_array($resultado_set)){
	    	?>
	    	<td><?php echo $row["cod_f_pago"];?></td>
	     <td><?php echo $row["nom_f_pago"];?></td>
	     </tr>
	    <?php	
	   }
	   ?>
	   </tbody>
</table>
</center>
<br>
<br>
<center><a class="btn btn-default" href="indexPrueba.php" role="button">Regresar</a></center>
</body>
</html>