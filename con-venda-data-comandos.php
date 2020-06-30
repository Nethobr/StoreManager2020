<?php 
	include_once ('conexao.php');
?>
<?php 
	$dt_reg_venda_prod = $_POST ['dt_reg_venda_prod'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Venda - consultas</title>
	<meta charset="utf-8">
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
<h2>DATA DA VENDA</h2>
<table>
	<td>
		<tr>
			<form action="con-venda-data-comandos.php" method="post">
				<p>
				<input type="date" name="dt_reg_venda_prod">
				</p>

				<p>
					<input type="submit" name="salvar" value="Buscar">
					<input type="reset" name="" value="Limpar">
				</p>
			</form>
		</tr>
	</td>
</table>

<table>
	<td>
		<tr>
			<?php 
				$consulta = mysqli_query ($conexao, "SELECT * FROM venda_prod vp 
										INNER JOIN cliente c ON
										(c.cpf_cli) = (vp.cpf_cli)
										INNER JOIN produto p ON 
										p.id_prod = vp.id_prod
                                        where vp.dt_reg_venda_prod = '$dt_reg_venda_prod'");

				while ($row = mysqli_fetch_array($consulta))
				{
			?>
			<div class="consulta">
				<span>
		      	<?php
		      		echo "Nome: ";
		      		echo $row ['nome_cli'];
		      	?>
	      			<br>
		      	<?php
		      		echo "Idade: ";
		      		echo $row ['idade_cli'];
		      	?>
	      			<br>
		      	<?php
		      		echo "Produto: ";
		      		echo $row ['nome_prod'];
		      	?>
	      			<br>
		      	<?php
		      		echo "Quantidade: ";
		      		echo $row ['quantidade_prod_venda'];
		      	?>
	      			<br>
		      	<?php
		      		echo "Observação: ";
		      		echo $row ['obs_venda_prod'];
		      	?>
	      			<br>
		      	<?php
		      		echo "Data: ";
		      		echo $row ['dt_reg_venda_prod'];
		      	?>
	      			<br>
		      	<?php
		      		echo "Valor: ";
		      		echo "to trabalhando nisso";
		      	?>
	      			<br>
				</span>
			</div>
			----
			<?php } ?>
		</tr>
	</td>
</table>
</body>
</html>