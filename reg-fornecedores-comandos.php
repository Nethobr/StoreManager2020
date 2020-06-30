<?php 
	/*Conectando ao B.D*/
	include_once ('conexao.php');
?>
<?php 
	/*Pegando os valores do formulário*/
	/*fornecedor*/
	$nome_forn = $_POST ['nome_forn'];
	$cnpj_forn = $_POST ['cnpj_forn'];
	$email_forn = $_POST ['email_forn'];
	$tel_forn = $_POST ['tel_forn'];
	/*endereco_forn*/
	$estado_end_forn = $_POST ['estado_end_forn'];
	$cidade_end_forn = $_POST ['cidade_end_forn'];
	$rua_end_forn = $_POST ['rua_end_forn'];
	$numero_end_forn = $_POST ['numero_end_forn'];
	$cep_forn = $_POST ['cep_forn'];
	$id_tp_end = $_POST ['id_tp_end'];
	/*Inserindo na tabela fornecedor*/
	$forn = "insert into fornecedor (nome_forn, cnpj_forn, email_forn, tel_forn, dt_reg_forn, ativo_forn) values ('$nome_forn', '$cnpj_forn', '$email_forn', '$tel_forn', now(), 1)";
	/*Inserindo na tavela endereco_forn*/
	$endforn = "insert into endereco_forn (estado_end_forn, cidade_end_forn, rua_end_forn, numero_end_forn, cep_forn, id_tp_end, id_forn, ativo_forn) values ('$estado_end_forn', '$cidade_end_forn', '$rua_end_forn', '$numero_end_forn', '$cep_forn', '$id_tp_end', 0, 1)";
	/*Conectando com o B.D*/
	/*Tabela fornecedor*/
	$salvar = mysqli_query ($conexao, $forn);
	/*Tabela endereco_forn*/
	$salvar2 = mysqli_query ($conexao, $endforn);

	/*Fechando a conexão*/
	mysqli_close ($conexao);
?>
<?php 
	/*Quando resgistrar, mandar novamente para a págº anterior*/
	session_start();	

	if(empty($_GET['id_tp_end']))
	{
		header('Location: reg-fornecedores.php');
		exit();
	}
?>
<!--
	Comentários adicionais:

	Trigger para para registrar o id_forn na tabela endereco_forn:

		CREATE TRIGGER endereco_forn_tr AFTER INSERT on fornecedor
		FOR EACH ROW
		UPDATE endereco_forn SET id_forn = id_end_forn WHERE id_forn = 0;
	
!-->