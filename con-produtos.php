<?php	
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html>
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
</body>
</html>

<!--
SELECT forn.nome_forn, cat.nome_cat_prod, nome_prod, descri_prod, valor_prod, quantidade_prod, dt_reg_prod
		FROM produto prod
		INNER JOIN fornecedor forn on
		prod.id_forn = forn.id_forn
		INNER JOIN categoria_prod cat on
		prod.id_cat_prod = cat.id_cat_prod 
!-->