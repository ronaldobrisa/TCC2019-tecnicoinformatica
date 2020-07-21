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
<form action="doinsfornecedores.php" method="POST" name="formulario" id="formulario">
<fieldset id="BoxForm"><legend align="center">Cadastra um novo fornecedor</legend>
 <ul> 
 <br><br>
           
	<li>
		<label for="nome_fantasia">nome_fantasia:</label>
		<input name="nome_fantasia" size="25" id="nome_fantasia" type="text" class="campos02"  value=""/>
	</li>

	<li>
		<label for="cpf_fornecedor">cpf_fornec:</label>
		<input name="cpf_fornecedor" size="25" id="cpf_fornecedor"  type="text" class="campos02" value=""/>
	</li>
	
	<li>
		<label for="cnpj_fornecedor">cnpj_fornec:</label>
		<input name="cnpj_fornecedor" size="25" id="cnpj_fornecedor" type="text" class="campos02" value=""/>
	</li>
	
	<li>
		<label for="data_cadastro">data_cadastro:</label>
		<input name="data_cadastro" id="data_cadastro"  type="date" class="campos02" value=""/>
	</li>
	<li>
		<label for="rua_fornecedor">rua_fornec:</label>
		<input name="rua_fornecedor" size="25" id="rua_fornecedor"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="num_fornecedor">num_fornec:</label>
		<input name="num_fornecedor" size="25" id="num_fornecedor"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="bairro_fornecedor">bairro_fornec:</label>
		<input name="bairro_fornecedor" size="25" id="bairro_fornecedor"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="uf_fornecedor">uf_fornec:</label>
		<input name="uf_fornecedor" size="25" id="uf_fornecedor"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="complemento_rua_fornec">compl_rua_fornec:</label>
		<input name="complemento_rua_fornec" size="25" id="complemento_rua_fornec"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="cpf_login">cpf_login:</label>
		<input name="cpf_login" size="25" id="cpf_login"  type="text" class="campos02" value=""/>
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
