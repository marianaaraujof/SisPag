<?php
# Sistema: SisPag
# Descrição: Página de controle do sistema
# Nome do Programa: controlerformulario.php
# Programador(a): Mariana Araujo

require_once('../session/session.php');


$_CPF = $_POST["cpf"];
$_NomeFunc = $_POST["nomefuncionario"];
$_AnoNasc = $_POST["nascimento"];
$_SBase = $_POST["salario"];
$_NumFilhos = $_POST["filhos"];


include '../library/library.php';


$_SFamilia = calc_familia($_NumFilhos);
$_Abono = calc_abono($_AnoNasc);
$_Idade = calc_idade($_AnoNasc);
$_SBruto = calc_bruto($_SFamilia, $_SBase, $_Abono);
$_INSS = calc_inss($_SBruto);
$_SLiquido = calc_liquido($_SBruto, $_INSS);

$_SESSION['dados'] = array('cpf'=>$_CPF, 'nomefuncionario'=>$_NomeFunc, 'nascimento'=>$_AnoNasc, 'salario'=>$_SBase, 'filhos'=>$_NumFilhos, 'salariofamilia'=>$_SFamilia, 'abono'=>$_Abono, 'idade'=>$_Idade, 'salariobruto'=>$_SBruto, 'inss'=>$_INSS, 'salarioliquido'=>$_SLiquido);


header('Location: ../view/folhapagamento.php');

?>









