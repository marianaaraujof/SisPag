<?php

	//require_once('../controller/controler_login.php');
	//require_once('../library/library.php');

	session_name('calcsispag');
	session_start();


	if (!isset($_SESSION["logado"])) {
    	header('Location: ../view/folha_login.php');
	}

?>