<!DOCTYPE html>
<html>
<head>
	<title>Conexion PostgreSQL</title>
</head>
<body>
	<CENTER><td colspan="2" align="CENTER"><h1>Conexion a base de datos</h1></td></CENTER>
	<form action="conectarPrincipal.php" method="POST">
		<table align="CENTER" width="225" cellspacing="2" cellpadding="2" border="0">
			<tr>
				<td colspan="2" align="CENTER" bgcolor=#cccccc>Login</td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<TD align="right">User Name:</TD>
				<td><input type="text" name="username" size="14" maxlength="50"></td>
			</tr>

			<tr>
				<TD align="right">Password:</TD>
				<td><input type="text" name="password" size="14" maxlength="50"></td>
			</tr>

			<tr>
				<TD align="right">Table:</TD>
				<td><input type="text" name="tabla" size="14" maxlength="50"></td>
			</tr>
			<tr>

			<tr>
				<br>
				<td colspan="2" align="CENTER"><input type="Submit" name="Visualizar"></td>
			</tr>
		</table>

	</form>
</body>
</html>