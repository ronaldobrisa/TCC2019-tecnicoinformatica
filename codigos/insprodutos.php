<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />

<!-- Link para o CSS de formulários -->
<link rel="stylesheet" type="text/css" href="../css/forms.css?v=<?php echo filemtime('css/forms.css'); ?>>"

<title></title>
</head>
<body> 
<!-- envia os dados via post para o arquivo doinsfornecedores que fará a gravação --> 
<form action="doinsservicos.php" method="POST" name="formulario" id="formulario">
<fieldset id="BoxForm"><legend align="center">Cadastra um novo servico</legend>
 <ul> 
 <br><br>
           
	<li>
		<label for="codigo_servico">login_cpf:</label>
		<input name="login_cpf" size="25" id="login_cpf" type="text" class="campos02"  value=""/>
	</li>

	<li>
		<label for="descricao_produto">descricao_produto:</label>
		<input name="descricao_produto" size="25" id="descricao_produto"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="data_entrada_produto">data_entrada_produto:</label>
		<input name="data_entrada_produto" size="25" id="data_entrada_produto"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="data_saida_estoque">data_saida_estoque:</label>
		<input name="data_saida_estoque" size="25" id="data_saida_estoque"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="qtde_entrada_produto">qtde_entrada_produto:</label>
		<input name="qtde_entrada_produto" size="25" id="qtde_entrada_produto"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="id_requis_saida_prod">id_requis_saida_prod:</label>
		<input name="id_requis_saida_prod" size="25" id="id_requis_saida_prod"  type="text" class="campos02" value=""/>
	</li>
	
	<br><br>

	<li>
	   <input type="submit" id="enviar" value="Enviar" onclick="this.value='Aguarde...'" />
	</li>
	
 </ul>
</fieldset>
</form>
</body>
<footer>
   <?php
   //# faz a chamada do include do rodapé 
  // include("footer_copyright.inc.php");?> 
</footer>
</html>
