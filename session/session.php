<?php
# Sistema: SisPag
# Descrição: Página de Verificar o Login do Sistema
# Nome do Programa: session.php
# Programador(a): Mariana Araujo

	//require_once('../controller/controler_login.php');
	//require_once('../library/library.php');

	session_name('calcsispag');
	session_start();


	if (!isset($_SESSION["logado"])) {
    	header('Location: ../view/folha_login.php');
	}

?>