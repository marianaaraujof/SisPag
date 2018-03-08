<?php
session_start();
//echo "cheguei aqui";
//exit;
$login = array("user01", "user02", "user03", "user04", "user05");
$senha = array("senha01", "senha02", "senha03", "senha04", "senha05");

$tamArray = count($login);

$msg = false;

for($i=0; i<$tamArray; $i++) {
	if ($_POST["nome_login"] == $login[$i] && $_POST["senha"] == $senha[$i]) {
		$msg = true;
	break;
	}
}
//echo "cheguei aqui";
//exit;


if($msg) {
	//echo "verdadeiro";
	//exit;
	$_SESSION["logado"] = true;
	$_SESSION["user"] = $_POST["nome_login"];
	header("Location: http://localhost/SisPag/formulario.php");
}
else {
	echo "falso";
	exit;
	header("Location: http://localhost/SisPag/folha_login.php");
}

?>