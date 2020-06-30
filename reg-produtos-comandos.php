<?php 
	include_once ('conexao.php');
?>
<?php 
	/*Pegando os valores do formulário*/
	$nome_prod = $_POST ['nome_prod'];
	$descri_prod = $_POST ['descri_prod'];
	$id_cat_prod = $_POST ['id_cat_prod'];
	$id_forn = $_POST ['id_forn'];
	$quantidade_prod = $_POST ['quantidade_prod'];
	$valor_prod = $_POST ['valor_prod'];

	/**substitui ","" por "."/
	$valor_prod = preg_replace('/,/', '.', $valor_prod);

	/*Criando os comandos para inserir nas tabelas*/
	/*tabela produto*/
	$prod = "insert into produto (nome_prod, descri_prod, id_cat_prod, id_forn, quantidade_prod, valor_prod, dt_reg_prod, ativo_prod) values ('$nome_prod', '$descri_prod', '$id_cat_prod', '$id_forn', '$quantidade_prod', '$valor_prod', now(), 1)";

	/*Conectando e salvando no B.D*/
	$salvar = mysqli_query ($conexao, $prod);
	/*fechando conn*/
	mysqli_close ($conexao);
?>
<?php 
	/*Quando resgistrar, mandar novamente para a págº anterior*/
	session_start();	

	if(empty($_GET['valor_prod']))
	{
		header('Location: reg-produtos.php');
		exit();
	}
?>