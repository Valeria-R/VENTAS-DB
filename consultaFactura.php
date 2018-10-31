<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<BR>
<body>
	<center><h3>Datos de las facturas</h3></center>
	<br>
<center><table class="table table-striped">
	<thead>
		<tr>
			<th width="100px">Codigo de la factura</th>
			<th width="250px">Nombre del cliente</th>
			<th width="200px">Valor de la factura</th>
		</tr>
	</thead>
	<tbody>
<?php
	$conexion = mysqli_connect("mysql.webcindario.com","pruebabdkl","salcedo99","pruebabdkl");
	$sql="SELECT cod_factura,nom_cliente,val_factura FROM factura,cliente WHERE cliente.cod_cliente=factura.cod_cliente order by cod_factura";
	$resultado_set=mysqli_query($conexion, $sql);
	    while($row=mysqli_fetch_array($resultado_set)){
	     ?>
	     <td><?php echo $row["cod_factura"];?></td>
	     <td><?php echo $row["nom_cliente"];?></td>
	     <td><?php echo $row["val_factura"];?></td>
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