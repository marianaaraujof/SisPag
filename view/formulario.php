<!--# Sistema: SisPag
# Descrição: Página de Visualizar Formulário do Sistema
# Nome do Programa: formulario.php
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

<h1> Calculo Salarial </h1>

<div>
<form name="Folha de pagamento" method="POST" action="../controller/controlerformulario.php">
  <p>CPF
  <input type="cpf" name="cpf" size="30" maxlength="11" placeholder="Somente Numeros"></p>
  <p>Funcionario
  <input type="text" name="nomefuncionario" size="30" placeholder="Nome Completo"> </p>
  <p>Ano Nascimento
  <input type="number" name="nascimento" min="1918" max="2017"> </p>
  <p>Salario Base
  <input type="text" name="salario" size="30" placeholder="R$"></p>
  <p>Quantidade de Filhos
  <input type="number" name="filhos" min="0" max="30" ></p>
  <p><input type="submit" value="Calcular"> </p>
</form>
</div>
<a href="../session/logout.php"> Sair </a>
</body>
</html>

