<!DOCTYPE html>
<html>
	<head>
		<title>Prueba Docker</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Página cargada con docker</h1>
		<table>
			<caption><h3>Tabla de usuarios</h3></caption>
			<tr>
				<th>DNI</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Contraseña</th>
			</tr>
			<?php
				foreach ($usuarios as $usuario) {
			?>
				<tr>
					<td><?php echo $usuario->getDNI();?> <?php if($usuario->getAdmin()) { echo "(admin)";} ?></td>
					<td><?php echo $usuario->getName();?></td>
					<td><?php echo $usuario->getLastName();?></td>
					<td><?php echo $usuario->getEmail();?></td>
					<td><?php echo $usuario->getPwd();?></td>
				<tr>
			<?php
				}
			?>
		</table>
	</body>
</html>