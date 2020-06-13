<?php
	require_once '../Models/Usuario.php';
	$usuarios = Usuario::getUsuarios();
	include '../Views/index.php';
?>