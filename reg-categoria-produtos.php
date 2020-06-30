<!DOCTYPE html>
<html>
<head>
	<title>Categoria do produto - Cadastro</title>
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
				<form method="post" action="reg-categoria-produtos-comandos.php">
					<!--Dados básicos!-->
					<h2>Dados básicos</h2>
						<p>
							<label>
								Nome
								<br>
								<input type="text" name="nome_cat_prod" maxlength="300" placeholder="Nome da categoria">
							</label>
						</p>

						<p>
							<label>
								Descrição
								<br>
								<input type="text" name="descri_cat_prod" maxlength="500" placeholder="Descrição da categoria">
							</label>
						</p>

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