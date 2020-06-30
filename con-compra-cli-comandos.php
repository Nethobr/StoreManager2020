<?php	
	include_once('conexao.php');
?>
<?php
	$cpf_cli = $_POST ["cpf_cli"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clientes - Consultas</title>
	<link rel="stylesheet" type="text/css" href="menulogadocss.css" />
	<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
<!--MasterPage!-->
		<nav id="menu">
			<ul>
				<center>					
					<!--Consultas / Relatórios!-->					
				    <li>
				    	Consultas
				    	<ul>
				    		<li>
				    			<a href="http://localhost/trabalho/consulta/con-clientes.php">Clientes</a>				    			
				    		</li>
				    		<li>
				    			<a href="http://localhost/trabalho/consulta/con-fornecedores.php">Fornecedor</a>
				    		</li>
				    		<li>
				    			<a href="http://localhost/trabalho/consulta/con-produtos.php">Produtos</a>
				    		</li>
				    		<li>
				    			<a href="http://localhost/trabalho/consulta/con-categoria-produtos.php">Categoria (produtos)</a>
				    		</li>
				    		<li>
				    			<a href="http://localhost/trabalho/consulta/con-venda.php">Venda produto</a>
				    		</li>
				    		<li>
				    			<a href="http://localhost/trabalho/consulta/con-compra-cli.php">Cliente compra</a>
				    		</li>
				    	</ul>
				    </li>			    
					<!--Cadastros!-->
				    <li>
				    	Cadastros
				    	<ul>
				    		<li>
				    			<a href="http://localhost/trabalho/cadastro/reg-clientes.php">Clientes</a>
				    		</li>
				    		<li>
				    			<a href="http://localhost/trabalho/cadastro/reg-venda-clientes.php">Vendas</a>
				    		</li>
				    		<li>
				    			<a href="http://localhost/trabalho/cadastro/reg-fornecedores.php">Fornecedor</a>
				    		</li>
				    		<li>
				    			<a href="http://localhost/trabalho/cadastro/reg-produtos.php">Produtos</a>
				    		</li>
				    		<li>
				    			<a href="http://localhost/trabalho/cadastro/reg-categoria-produtos.php">Categoria de produtos</a>
				    		</li>
				    	</ul>
				    </li>
					<!--Ajuda ao usuário!-->
					<li>
						Ajuda
						<ul>
							<li>
								<a href="http://localhost/trabalho/">Como usar</a>
							</li>
							<li>
								<a href="http://localhost/trabalho/">Para que serve</a>
							</li>
						</ul>
					</li>				    
					<!--Logout!-->
			    	<li><a href="http://localhost/trabalho/logout.php">Logout</a></li>		    	
			    </center>	
			</ul>
		</nav>
<h1>Consulta compras</h1>
	<table>
		<td>
			<tr>
				<form method="post" action="con-compra-cli-comandos.php">
					<p>
						<label>
							CPF<br>
								<input type="text" name="cpf_cli" maxlength="14" placeholder="EX: 000.000.000-00">
						</label>
					</p>
					<p>
						<input type="submit" name="salvar" value="Pesquisar">
						<input type="reset" name="" value="Limpar">
					</p>
				</form>
			</tr>
		</td>
	</table>
	<h2>Informações da compra</h2>
	<?php
		/*Selcionando os campos na tabela cliente*/
		$junto = mysqli_query ($conexao, "SELECT * FROM venda_prod vp 
										INNER JOIN cliente c ON
										(c.cpf_cli) = (vp.cpf_cli)
										INNER JOIN produto p ON 
										p.id_prod = vp.id_prod
                                        where vp.cpf_cli = '$cpf_cli' 
										");
		$sql_compra = mysqli_query ($conexao, "SELECT * FROM venda_prod WHERE cpf_cli = '$cpf_cli'");

		while ($row_cli = mysqli_fetch_array($junto))
		{
	?>

	<div class="compras">
      <span>
	      	<?php
	      		echo "Nome: ";
	      		echo $row_cli ['nome_cli'];
	      	?>
      			<br>
	      	<?php
	      		echo "Idade: ";
	      		echo $row_cli ['idade_cli'];
	      	?>
      			<br>
	      	<?php
	      		echo "Produto: ";
	      		echo $row_cli ['nome_prod'];
	      	?>
      			<br>
	      	<?php
	      		echo "Quantidade: ";
	      		echo $row_cli ['quantidade_prod_venda'];
	      	?>
      			<br>
	      	<?php
	      		echo "Observação: ";
	      		echo $row_cli ['obs_venda_prod'];
	      	?>
      			<br>
	      	<?php
	      		echo "Data: ";
	      		echo $row_cli ['dt_reg_venda_prod'];
	      	?>
      			<br>
		      	<?php
		      		echo "Valor: ";
		      		echo "to trabalhando nisso";
		      	?>

      </span>
    </div>
    ------
	<?php
		} 
	?>

</body>
</html>

<!--2147483647!-->