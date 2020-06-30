<?php 
	/*Conectando ao B.D*/
	include_once ('conexao.php');
?>
<?php 
	/*Pega aos valores registrados no formulário*/
	$nome_cli = $_POST ['nome_cli'];
	$sexo_cli = $_POST ['sexo_cli'];
	$cpf_cli = $_POST ['cpf_cli'];
	$idade_cli = $_POST ['idade_cli'];
	$dt_nasc_cli = $_POST ['dt_nasc_cli'];
	$email_cli = $_POST ['email_cli'];
	$tel_cli = $_POST ['tel_cli'];
	$rua_end = $_POST ['rua_end'];
	$numero_end = $_POST ['numero_end'];
	$complemento_end = $_POST ['complemento_end'];
	$cep_end = $_POST ['cep_end'];
	$id_tp_end = $_POST ['id_tp_end'];

	/*Inseriando na tabela cliente*/
	$cli = "insert into cliente (nome_cli, sexo_cli, cpf_cli, idade_cli, dt_nasc_cli, email_cli, tel_cli, ativo_cli, dt_reg_cli) values ('$nome_cli', '$sexo_cli', '$cpf_cli', '$idade_cli', '$dt_nasc_cli', '$email_cli', '$tel_cli', '1', now())";
	/*Pegando o id do cliente no B.D*/
	$id = "select id_cli from cliente WHERE cpf_cli = '$cpf_cli'";
	/*Inseriando o endereço*/
	$end = "insert into endereco_cli (rua_end, numero_end, complemento_end, cep_end, id_tp_end, id_cli, ativo_end) values ('$rua_end', '$numero_end', '$complemento_end', '$cep_end', '$id_tp_end', '$@id', 1)";
	/*Atualizadno o id do cliente
	$up = "UPDATE endereco set id_cli = "

	/*ligndo ao banco de dados*/
	$salvar = mysqli_query ($conexao, $cli);
	$salvar2 = mysqli_query ($conexao, $id);
	$salvar3 = mysqli_query ($conexao, $end);
	mysqli_close ($conexao);
?>
<?php 
	/*Quando resgistrar, mandar novamente para a págº anterior*/
	session_start();	

	if(empty($_GET['id_tp_end']))
	{
		header('Location: reg-clientes.php');
		exit();
	}
?>
<!--Comentários extras sobre o códg e B.D
Trigger para atualizar o id_cli no endereço, assim que registrado.

CREATE TRIGGER endereco_cli AFTER INSERT on cliente
FOR EACH ROW
	UPDATE endereco SET id_cli = new.id_cli;
ATT
CREATE TRIGGER endereco_cli AFTER INSERT on cliente
FOR EACH ROW
	UPDATE endereco SET id_cli = new.id_cli WHERE id_cli = 0;

ATT2 
CREATE TRIGGER endereco_cli_tr AFTER INSERT on cliente
FOR EACH ROW
	UPDATE endereco_cli SET id_cli = id_end WHERE id_cli = id_end;

Trigger para deixar o nome dos clietnes em maiúsculo

CREATE TRIGGER mausculo_cli AFTER INSERT on cliente
FOR EACH ROW
	UPDATE cliente SET nome_cli = upper(nome_cli);
    
!-->