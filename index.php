<?php 
	include_once ('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina principal</title>
	<link rel="stylesheet" type="text/css" href="indexcss.css"/>
	<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
	<center>
		<h1>LOGIN</h1>

		<form method="post" action="login.php">
			<label>Nome: </label> 
			<input type="text" name="nome" placeholder="nome de usuário"><p>

			<label>Senha: </label>
			<input type="password" name="senha" placeholder="senha do usuário"><p>
			<p>
				
				<?php
					if (isset($_SESSION['nao_autenticado'])):
				?>
				<p>Usuario invalido!</p>
				<?php
					endif;
					unset($_SESSION['nao_autenticado']);
				?>
			<div class="g-recaptcha" data-sitekey="6LcsVbwUAAAAAD5Xva37fUNd86x07hnRQClH8iOC"></div>
	        <p>
			<input type="submit" name="enviar" value="Enviar">
			<input type="reset" name="" value="Limpar">
			<p>
		</form>
				<h5>Alpha 0.1</h5>
	</center>



<script src="https://www.google.com/recaptcha/api.js" async defer></script> 
</body>
</html>