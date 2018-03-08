<?php
function calc_abono ($Ano) {
		if(date("Y") - $Ano) {
			$abono = 800;
		}
		else {
			$abono = 0;
		}
		return $abono;
	}

function calc_idade ($Ano) {
		$idade = date("Y") - $Ano;
		return $idade;
	}

function calc_inss ($sbruto) {
		$inss = ($sbruto/100)*11;
		return $inss;
	}

function calc_bruto ($familia, $base, $abn) {
		$bruto = $familia + $base + $abn;
		return $bruto;
	}

function calc_familia ($filhos) {
		$fam = $filhos * 30;
		return $fam;
	}

function calc_liquido ($bruto,$inss) {
		$liq = $bruto - $inss;
		return $liq;
	}

function verificar_login ($login,$senha) {
	
	if ( $login == 'user01' && $senha == 'senha01') {
		$_SESSION['logado'] = true;
		$_SESSION['user'] = $_POST["nome_login"];
		header('Location: http://localhost/SisPag/view/formulario.php');
	}
	else {
		header('Location: ../view/folha_login.php');
		$_SESSION['logado'] = false;
	}
	
}
?>