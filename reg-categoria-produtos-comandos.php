<?php
	include_once ('conexao.php');
	/*Pegando os valores */
	$nome_cat_prod = $_POST ['nome_cat_prod'];
	$descri_cat_prod = $_POST ['descri_cat_prod'];
	/*Colocando dentro da tabela*/
	$cat_prod = "insert into categoria_prod (nome_cat_prod, descri_cat_prod, dt_reg_cat_prod, ativo_cat_prod) values ('$nome_cat_prod', '$descri_cat_prod', now(), 1)";
	/*Salvando no banco*/
	$salvar = mysqli_query ($conexao, $cat_prod);
	/*Fechando para não dar ruim*/
	mysqli_close ($conexao);
?>
<?php 
	/*Quando resgistrar, mandar novamente para a págº anterior*/
	session_start();	

	if(empty($_GET['descri_cat_prod']))
	{
		header('Location: reg-categoria-produtos.php');
		exit();
	}
?>