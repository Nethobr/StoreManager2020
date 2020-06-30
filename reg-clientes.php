<!DOCTYPE html>
<html>
<head>
	<title>Cliente - Cadastro</title>
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
				<form method="post" action="reg-clientes-comandos.php">
					<!--Dados pessoais!-->
					<h2>Dados pessoais</h2>
					<p>
						<label>
							Nome<br>
								<input type="text" name="nome_cli" maxlength="300" placeholder="Nome do cliente, minusculo">
						</label>
					</p>
					<p>
						<label>
							Sexo
								<br>
									<i>
									<label>
										Masculino
											<input type="radio" name="sexo_cli" value="Masculino">
									</label>
									<label>
										Feminino
											<input type="radio" name="sexo_cli" value="Feminino">
									</label>
									<label>
										Outros
											<input type="radio" name="sexo_cli" value="Outros">
									</label>
									</i>
						</label>
					</p>
					<p>
						<label>
							CPF<br>
								<input type="text" name="cpf_cli" maxlength="14" placeholder="EX: 000.000.000-00">
						</label>
					</p>
					<p>
						<label>
							Idade<br>
								<input type="number" name="idade_cli" maxlength="3" placeholder="Idade do cliente">
						</label>
					</p>
					<p>
						<label>
							Data de nascimento<br>
								<input type="date" name="dt_nasc_cli">
						</label>
					</p>
					<!--Dados para contato!-->
					<h2>Dados para contato</h2>
					<p>
						<label>
							E-mail<br>
								<input type="email" name="email_cli" maxlength="250" placeholder="E-mail do cliente">
						</label>
					</p>
					<p>
						<label>
							Celuar<br>
								<input type="tel" name="tel_cli" maxlength="12" placeholder="Numero de celular" id="celular">
						</label> 
					</p>
					<!--Endereço
					<h2>Endereço</h2>
						<p>
							<label>
								Rua<br>
									<input type="text" name="rua_end" maxlength="300" placeholder="Rua">
							</label>							
						</p>
						<p>
							<label>
								Numero<br>
									<input type="number" name="numero_end" maxlength="5" placeholder="Nº onde reside">
							</label>
						</p>
						<p>
							<label>
								Complemento<br>
									<input type="text" name="complemento_cli" maxlength="300" placeholder="Complemento do endereço">
							</label>
						</p>
						<p>
							<label>
								CEP<br>
									<input type="text" name="cep_end" maxlength="9" placeholder="CEP">
							</label>
						</p>
						<p>
							<label>
								Tipo do endereço
									<br>
										<i>
										<label>
											Residencial
												<input type="radio" name="id_tp_end" value="1">
										</label>
										<label>
											Comercial
												<input type="radio" name="id_tp_end" value="2">
										</label>
										</i>
							</label>
						</p>
						!-->
						<!--Salvar ou limpar campos!-->
						<br>
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