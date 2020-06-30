<?php 
	include_once ('conexao.php');
?>
<?php 
	$cpf_cli = $_POST ['cpf_cli'];
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
<h1>Cliente</h1>
	<form method="POST" action="con-clientes-res.php">
		<p>
			<input type="text" name="cpf_cli" maxlength="14" placeholder="CPF do cliente">
		</p>
		<p>
			<input type="submit" name="salvar" value="Buscar">
			<input type="reset" name="" value="Limpar">
		</p>
</form>
	<?php
		/*Selcionando os campos na tabela cliente*/
		$sql_cliente = mysqli_query ($conexao, "SELECT * FROM cliente where cpf_cli = '$cpf_cli'");

		/*se tiver o cpf ele retor, se não ele fala q n tem*/
		$row = mysqli_num_rows ($sql_cliente);

		if ($row == 1)
		{

		while ($row_cli = mysqli_fetch_array($sql_cliente))
		{
	?>

	<div class="clientes">
      <span>
		<h2>Dados</h2>     	
	      	<?php 
	      		/*Mostrando os campos como eles foram atribuidos a um linha "row"
	      		echo "Identificador: ";
	      		echo $row_cli ['id_cli'];
	      		*/
	      	?>
	      	<?php
	      		echo "Nome: ";
	      		echo $row_cli ['nome_cli'];
	      	?>
				<br>
			<?php 
	      		echo "CPF: ";
	      		echo $row_cli ['cpf_cli'];
	      	?>
				<br>
			<?php 
	      		echo "Idade: ";
	      		echo $row_cli ['idade_cli'];
	      	?>
	      		<br>
	      	<?php
	      		echo "Sexo: ";
	      		echo $row_cli ['sexo_cli'];
	      	?>
	      	<br>
	      	<h2>Contato</h2>
	      	<?php 
	      		echo "E-mail: ";
	      		echo $row_cli ['email_cli'];
			?>
				<br>
			<?php
	      		echo "Celular: ";
	      		echo $row_cli ['tel_cli'];
	      	?>
	      	<br>
      	</span>
   </div>
   -------
   <?php
	   /*Fechando o while do cliente*/
		}
	}
	else
		{
			echo "CPF do cliente não registrado!";
		}
	?>
</body>
</html>