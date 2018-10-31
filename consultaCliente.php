<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<BR>
<body>
<center><h3>Datos de los clientes</h3></center>
<br>
<center><table class="table table-striped">
	<thead>
		<tr>
			<th width="100px">ID</th>
			<th width="250px">Nombre del cliente</th>
			<th width="200px">Nombre de la ciudad</th>
			<th width="250px">Nombre del vendedor</th>
			<th width="150px">Forma de pago</th>
		</tr>
	</thead>
	<tbody>
<?php
	$conexion = mysqli_connect("mysql.webcindario.com","pruebabdkl","salcedo99","pruebabdkl");
	$sql="SELECT cod_cliente,nom_cliente,nom_ciudad,nom_vendedor,nom_f_pago FROM cliente,vendedor,ciudad,f_pago WHERE cliente.cod_vendedor = vendedor.cod_vendedor and cliente.cod_f_pago = f_pago.cod_f_pago and cliente.cod_ciudad = ciudad.cod_ciudad order by cod_cliente";
	$resultado_set=mysqli_query($conexion, $sql);
	    while($row=mysqli_fetch_array($resultado_set)){
	    	?>
	     <td><?php echo $row["cod_cliente"];?></td>
	     <td><?php echo $row["nom_cliente"];?></td>
	     <td><?php echo $row["nom_ciudad"];?></td>
	     <td><?php echo $row["nom_vendedor"];?></td>
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