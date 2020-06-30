<?php	
	include_once('conexao.php');
	
	if(empty($_POST['nome']) || empty($_POST['senha']))
	{
		header('Location: index.php');
		exit();
	}
?>
<?php
	$nome = mysqli_real_escape_string ($conexao, $_POST['nome']);
	$senha = mysqli_real_escape_string ($conexao, $_POST['senha']);
	$ativo = mysqli_real_escape_string ($conexao, $_GET['ativo']);

	$query = "select*from usuario where nome= '{$nome}' and senha= '{$senha}' and ativo= 1";

	$result = mysqli_query($conexao, $query);

	$row = mysqli_num_rows($result);

	if ($row == 1)
	{
		$_SESSION['nome'] = $nome;
		header('Location: logado.php');
		exit();
	}
	else if ($row == 0)
	{
		$_SESSION['nao_autenticado'] = true;
		header('Location: Index.php');
		exit();
	}	

?>
