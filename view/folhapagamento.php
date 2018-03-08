<!DOCTYPE html>
<html lang="pt-br">
<?php
  require_once ('../session/session.php');
?>
<head>
    <meta charset="utf-8"/>
    <title> Formulario </title>
    <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
</head>
<body>
	<h1> Cupom salarial </h1>
  <div id="mostrar_folha">
		<p>CPF: <?php echo"$_SESSION['_cpf']"; ?> </p>
		<p>Funcionário: <?php echo"$_SESSION['_Nome']"; ?> </p>
		<p>Idade: <?php echo "$_SESSION['_Idade']"; ?> anos </p>
		<p>Salário base: R$ <?php echo"$_SESSION['_SBase']";?> </p>
		<p>Salário família: R$ <?php echo"$_SESSION['_SFamilia']"; ?></p>
		<p>Abono: R$ <?php echo"$_SESSION['_Abono']"; ?></p>
		<p>Salário bruto: R$ <?php echo"$_SESSION['_SBruto']"; ?></p>
		<p>INSS: R$ <?php echo"$_SESSION['_INSS']"; ?></p>
		<p>Salário liquido: R$ <?php echo"$_SESSION['_SLiquido']"; ?></p>
  </div>
  <a href="../view/formulario.php"> Voltar </a>
</body>
</html>
