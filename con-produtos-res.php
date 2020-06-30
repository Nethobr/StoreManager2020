<?php 
	include_once ('conexao.php');
	$id_cat_prod = $_POST ['id_cat_prod'];


?>
<head>
	<title>Produtos - Consultas</title>
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
<body>
<h1>Produtos registrados</h1>
	
	<form method="post" action="con-produtos-res.php">
					<p>
						<label>
							<!--Vai resgatar na tabela categoria_prod!-->
							Categoria
							<br>
								<select name="id_cat_prod">
									<?php
										/*Selcionando o produto na tabela produto*/
										$sql_categoria = mysqli_query ($conexao, "SELECT * FROM categoria_prod where nome_cat_prod = nome_cat_prod");
										while($row_categoria = mysqli_fetch_array($sql_categoria))
											{
									?>
										<option value= "<?php echo $row_categoria ['id_cat_prod']; /*Atribui ID da categoria*/ ?>">
											<?php 
												/*pega o nome do produto*/
												echo $row_categoria ['nome_cat_prod']; 
												/*fecha o while*/
												}
											?>
									</option>
							</select>
						</label>
					</p>
						<p>
							<input type="submit" name="salvar" value="Consultar">
							<input type="reset" name="" value="Limpar">
						</p>
	</form>



	<?php
		/*Selcionando os campos na tabela cliente*/
		$query = mysqli_query ($conexao, "SELECT * FROM produto where id_cat_prod = '$id_cat_prod'");
		/*
		$inner = mysqli_query ($conexao, "SELECT * FROM produto p inner join categoria_prod c on p.id_cat_prod = c.id_cat_prod inner join fornecedor f on p.id_forn = f.id_forn");
		*/

			while($row_produto = mysqli_fetch_array ($query))
			{
	?>

		<div class="produtos">
			<span>
				<h2>Informações</h2>
					<?php
						echo "Nome: ";
		      			echo $row_produto ['nome_prod'];  
					?>
						<br>
					<?php 
						echo "Fornecedor: ";
		      			echo $row_produto ['id_forn']; 
					?>
						<br>
					<?php 
						echo "Categoria: ";
						echo $row_produto ['id_cat_prod'];
					?>
						<br>
					<?php 
						echo "Quantidade: ";
						echo $row_produto ['quantidade_prod'];
						echo "un";
					?>
						<br>
					<?php 
						echo "Valor: R$ ";
						echo $row_produto ['valor_prod'];
					?>
						<br>
			</span>	
		</div>
	<?php 
		}
	?>
</body>
</html>