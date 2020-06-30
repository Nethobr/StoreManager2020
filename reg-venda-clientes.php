<?php	
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Compras - Cadastro</title>
	<link rel="stylesheet" type="text/css" href="menulogadocss.css" />
	<link rel="stylesheet" type="text/css" href="main.css" />
</head>
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

<h2>Cadastro de compras</h2>
<table>
	<td>
		<tr>
			<form method="post" action="reg-venda-clientes-comandos.php">
				<p>
					<label>
						CPF<br>
							<input type="text" name="cpf_cli" maxlength="14" placeholder="CPF do cliente">
					</label>
				</p>
				<p>
					<label>
						Produto
						<br>
							<select name="id_prod" id="id_venda">
								<?php
									/*Selcionando o produto na tabela produto*/
									$sql_prod = mysqli_query ($conexao, "SELECT * FROM produto where nome_prod = nome_prod");
									while($row_prod = mysqli_fetch_array($sql_prod))
										{
								?>
									<option value= "<?php echo $row_prod ['id_prod']; /*Atribui o ID do produto no valor dele*/ ?>">
										<?php 
											/*pega o nome do produto*/
											echo $row_prod ['nome_prod']; 
											/*fecha o while*/
											}
										?>
								</option>
							</select>	
					</label>	
				</p>
				<p>
					<label>
						Quantidade<br>
							<input type="number" name="quantidade_prod_venda" placeholder="Quantidade do produto" id="quantidade_venda">
					</label>
				</p>
				<p>
					<label>
						Observação<br>
							<textarea name="obs_venda_prod" placeholder="Observação sobre a compra aqui realizada" maxlength="500"></textarea>
					</label>
				</p>
				<p>
					<input type="submit" name="salvar" value="Cadastrar">
					<input type="reset" name="" value="Limpar">
				</p>
			</form>
		</tr>
	</td>
</table>
</body>
</html>
