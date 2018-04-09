<!--# Sistema: SisPag
# Descrição: Página de Visualizar Folha de Pagamento do Sistema
# Nome do Programa: folhapagamento.php
# Programador(a): Mariana Araujo -->
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
		<p>CPF: <?php echo $_SESSION['dados']['cpf']; ?> </p>
		<p>Funcionário: <?php echo $_SESSION['dados']['nomefuncionario']; ?> </p>
		<p>Idade: <?php echo $_SESSION['dados']['idade']; ?> anos </p>
		<p>Salário base: R$ <?php echo $_SESSION['dados']['salario'];?> </p>
		<p>Salário família: R$ <?php echo $_SESSION['dados']['salariofamilia']; ?></p>
		<p>Abono: R$ <?php echo $_SESSION['dados']['abono']; ?></p>
		<p>Salário bruto: R$ <?php echo $_SESSION['dados']['salariobruto']; ?></p>
		<p>INSS: R$ <?php echo $_SESSION['dados']['inss']; ?></p>
		<p>Salário liquido: R$ <?php echo $_SESSION['dados']['salarioliquido']; ?></p>
  </div>
  <a href="../view/formulario.php"> Voltar </a>
</body>
</html>