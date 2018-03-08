<?php
  require_once('../session/session.php');
  
  $_SESSION['_cpf'] = $_POST["cpf"];
  $_SESSION['_Nome'] = $_POST["nomefuncionario"];
  $_SESSION['_AnoNasc'] = $_POST["nascimento"];
  $_SESSION['_SBase'] = $_POST["salario"];
  $_SESSION['_NumFilhos'] = $_POST["filhos"];

  include '../library/library.php';
  
  $_SESSION['_SFamilia'] = calc_familia($_SESSION['_NumFilhos']);
  $_SESSION['_Abono'] = calc_abono($_SESSION['_AnoNasc']);
  $_SESSION['_Idade'] = calc_idade($_SESSION['_AnoNasc']);
  $_SESSION['_SBruto'] = calc_bruto($_SESSION['_SFamilia'],$_SESSION['_SBase'],$_SESSION['_Abono']);
  $_SESSION['_INSS'] = calc_inss($_SESSION['_SBruto']);
	$_SESSION['_SLiquido'] = calc_liquido($_SESSION['_SBruto'],$_SESSION['_INSS']);
	
	header('Location: ../view/folhapagamento.php');
	
?>
  
  


 