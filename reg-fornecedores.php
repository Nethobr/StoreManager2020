<?php 
	include_once ('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fornecedor - Cadastro</title>
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
				<form method="post" action="reg-fornecedores-comandos.php">
					<!--Dados pessoais!-->
					<h2>Dados pessoais</h2>
					<p>
						<label>
							Nome fantasia<br>
								<input type="text" name="nome_forn" maxlength="300" placeholder="Nome do fornecedor, minusculo">
						</label>
					</p>
					<p>
						<label>
							CNPJ<br>
								<input type="text" name="cnpj_forn" maxlength="14" placeholder="CNPJ do fornecedor">
						</label>
					</p>
					<p>
						<label>
							Categoria<br>
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
					<!--Dados para contato!-->
					<h2>Dados para contato</h2>
					<p>
						<label>
							E-mail<br>
								<input type="email" name="email_forn" maxlength="250" placeholder="E-mail do fornecedor">
						</label>
					</p>
					<p>
						<label>
							Celuar<br>
								<input type="tel" name="tel_forn" maxlength="12" placeholder="Numero de celular">
						</label> 
					</p>
					<!--Endereço
					<h2>Endereço</h2>
						<p>
							<label>
								Estado<br>
									<input type="text" name="estado_end_forn" maxlength="300" placeholder="Estado">
							</label>							
						</p>
						<p>
							<label>
								Cidade<br>
									<input type="text" name="cidade_end_forn" maxlength="300" placeholder="Cidade">
							</label>							
						</p>
						<p>
							<label>
								Rua<br>
									<input type="text" name="rua_end_forn" maxlength="300" placeholder="Rua">
							</label>							
						</p>
						<p>
							<label>
								Numero<br>
									<input type="number" name="numero_end_forn" maxlength="5" placeholder="Nº onde reside">
							</label>
						</p>
						<p>
							<label>
								Complemento<br>
									<input type="text" name="complemento_end_forn" maxlength="300" placeholder="Complemento do endereço">
							</label>
						</p>
						<p>
							<label>
								CEP<br>
									<input type="text" name="cep_forn" maxlength="9" placeholder="CEP">
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
						<!--Comentários
						<p>
							<label>
								Comentários adicionais:
								<br>
									<textarea name="comentario_forn" placeholder="Colque aqui alguns comentários sobre seu fornecedor"></textarea>
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