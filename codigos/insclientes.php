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
<form action="doinsclientes.php" method="POST" name="formulario" id="formulario">
<fieldset id="BoxForm"><legend align="center">Cadastra um novo cliente</legend>
 <ul> 
 <br><br>
           
	<li>
		<label for="nome_cliente">nome_cliente:</label>
		<input name="nome_cliente" size="25" id="nome_cliente" type="text" class="campos02"  value=""/>
	</li>

	<li>
		<label for="login_cpf">login_cpf:</label>
		<input name="login_cpf" size="25" id="login_cpf"  type="text" class="campos02" value=""/>
	</li>
	
	<li>
		<label for="cnpj_cliente">cnpj_cliente:</label>
		<input name="cnpj_cliente" size="25" id="cnpj_cliente" type="text" class="campos02" value=""/>
	</li>
	
	<li>
		<label for="rua_resid">rua_resid:</label>
		<input name="rua_resid" id="rua_resid"  type="date" class="campos02" value=""/>
	</li>
	<li>
		<label for="bairro_resid">bairro_resid:</label>
		<input name="bairro_resid" size="25" id="bairro_resid"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="num_resid">num_resid:</label>
		<input name="num_resid" size="25" id="num_resid"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="uf_resid">uf_resid:</label>
		<input name="uf_resid" size="25" id="uf_resid"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="data_nascimento">data_nascimento:</label>
		<input name="data_nascimento" size="25" id="data_nascimento"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="cidade_resid">cidade_resid:</label>
		<input name="cidade_resid" size="25" id="cidade_resid"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="data_cadastro">data_cadastro:</label>
		<input name="data_cadastro" size="25" id="data_cadastro"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="telefone1">telefone1:</label>
		<input name="telefone1" size="25" id="telefone1"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="telefone2">telefone2:</label>
		<input name="telefone2" size="25" id="telefone2"  type="text" class="campos02" value=""/>
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
