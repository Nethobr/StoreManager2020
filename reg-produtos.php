<?php	
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Produto - Cadastro</title>
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
<table>
	<td>
		<tr>
			<div class="form">
				<form method="post" action="reg-produtos-comandos.php">
					<!--Dados básicos!-->	
					<h2>Dados básicos</h2>
					<p>
						<label>
							Nome<br>
								<input type="text" name="nome_prod" placeholder="Nome do produto" maxlength="300">
						</label>
					</p>
					<p>
						<label>
							Descrição<br>
								<input type="text" name="descri_prod" placeholder="Descrição do produto" maxlength="500">
						</label>
					</p>
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
						<label>
							<!--Vai resgatar na tabela fornecedor!-->
							Fornecedor
							<br>
								<select name="id_forn">
									<?php
										/*Selcionando o produto na tabela produto*/
										$sql_forn = mysqli_query ($conexao, "SELECT * FROM fornecedor where nome_forn = nome_forn");
										while($row_forn = mysqli_fetch_array($sql_forn))
											{
									?>
										<option value= "<?php echo $row_forn ['id_forn']; /*Atribui ID da categoria*/ ?>">
											<?php 
												/*pega o nome do produto*/
												echo $row_forn ['nome_forn']; 
												/*fecha o while*/
												}
											?>
									</option>
							</select>
						</label>
					</p>

					<!--Dados enssenciais!-->
					<h2>Dados numéricos</h2>
					<p>
						<label>
							Quantidade<br>
								<input type="number" name="quantidade_prod" placeholder="Quantidade do produto">
						</label>
					</p>
					<p>
						<label>
							Valor<br>
								<input type="text" name="valor_prod" placeholder="xx.yy">
						</label>
					</p>
						<!--Salvar ou limpar campos!-->
						<p>
							<input type="submit" name="salvar" value="Salvar">
							<input type="reset" name="" value="Limpar">
						</p>
				</form>
			</div>
		</tr>
	</td>
</table>
</body>
</html>