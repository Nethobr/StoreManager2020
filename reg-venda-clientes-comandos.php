<?php 
	include_once('conexao.php');
	/*Pegando os valores no formulário*/
	$cpf_cli = $_POST ['cpf_cli'];
	$id_prod = $_POST ['id_prod'];
	$quantidade_prod_venda = $_POST ['quantidade_prod_venda'];
	$obs_venda_prod = $_POST ['obs_venda_prod'];

	/*Colocando os dados dentro da tabela*/
	$venda = "insert into venda_prod (cpf_cli, id_prod, quantidade_prod_venda, obs_venda_prod, dt_reg_venda_prod, ativo_venda_prod) 
	values ('$cpf_cli', '$id_prod', '$quantidade_prod_venda', '$obs_venda_prod', now(), 1)";

	/*Salvando no B.D*/
	$salvar1 = mysqli_query ($conexao, $consulta);
	$salvar2 = mysqli_query ($conexao, $venda);
	/*Fechando para não dar ruim*/
	mysqli_close ($conexao);
?>
<?php 
	/*Quando resgistrar, mandar novamente para a págº anterior*/
	session_start();	

	if(empty($_GET['valor_venda_prod']))
	{
		header('Location: reg-venda-clientes.php');
		exit();
	}

?>
<!--Comentários extras sobre o códg e B.D
Trigger para registrar o valor da venda automático.


CREATE TRIGGER valor_venda_prod_tr AFTER INSERT on venda_prod
FOR EACH ROW
	select * from produto p 
	inner join venda_prod vp on
	p.id_prod = vp.id_prod;
	update venda_prod set valor_venda_prod = (quantidade_venda_prod * produto.valor_prod)
	where id_venda_prod = new.id_venda_prod;

CREATE TRIGGER valor_venda_prod_tr AFTER INSERT on venda_prod
FOR EACH ROW
	select (p.valor_prod * vp.quantidade_prod_venda)from produto p 
	inner join venda_prod vp on
	p.id_prod = vp.id_prod


SELECT (p.valor_prod * vp.quantidade_prod_venda) from produto p 
INNER JOIN venda_prod vp ON
(p.id_prod = 1) = (vp.id_prod = 1)


Trigger para baixar o estoque do produto
CREATE TRIGGER baixa_estoque_prod AFTER INSERT on venda_prod
FOR EACH ROW

	UPDATE produto SET quantidade_prod = quantidade_prod - NEW.quantidade_prod_venda
    WHERE id_prod = NEW.id_prod;


insert into venda_prod (cpf_cli, id_prod, quantidade_prod_venda, obs_venda_prod, valor_venda_prod, dt_reg_venda_prod, ativo_venda_prod) 
	values ('$cpf_cli', 1, 2, 'obs_venda_prod', '0.00', now(), 1)
	!-->