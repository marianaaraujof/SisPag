<?php
	session_name('calcsispag');
	session_start();
	session_destroy();
	header('Location: ../view/folha_login.php');
	exit;
?>