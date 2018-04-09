<?php
# Sistema: SisPag
# Descrição: Página de Logout do Sistema
# Nome do Programa: logout.php
# Programador(a): Mariana Araujo

	session_name('calcsispag');
	session_start();
	session_destroy();
	header('Location: ../view/folha_login.php');
	exit;
?>