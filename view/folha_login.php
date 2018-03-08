<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title> Login SisPag 1</title>
    <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
</head>
<body>
	<h1> Calculo Salarial </h1>
	<div> 
		<form name="login_sispag" method="POST" action="../controller/controler_login.php">
			<h1> Login </h1>
			<p> Usuario: 
				<input type="text" name="nome_login" id="nome_login" size="30" maxlength="15"></p>
			<p> Senha:
				<input type="password" name="senha" id="senha" size="30" maxlength="11"></p>
			<input type="submit" value="Entrar"> 
		</form>
	</div>
</body>
</html>