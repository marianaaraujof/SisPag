<?php 
	
	require_once ('../library/library.php');

	session_name("calcsispag");
	session_start();


	$_Login = trim($_POST["nome_login"]);
	$_senha = trim($_POST["senha"]);

	$_SESSION['nome_login'] = $_Login;
	$_SESSION['senha'] = $_senha;
	
	verificar_login($_Login,$_senha);
	header('Location: ../view/formulario.php');


?>